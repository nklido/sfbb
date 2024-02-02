<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Models\PostalCode;
use App\Models\Street;
use App\Models\StreetNumber;
use Symfony\Component\DomCrawler\Crawler;
use Goutte\Client;

class ImportAvailabilityCosmote extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'availability-cosmote:import';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import cosmote availability for specific tk';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        libxml_use_internal_errors(true);

        $baseUri = 'https://www.cosmote.gr/eshop/global/gadgets/populateAddressDetailsV3.jsp';
        $availabilityUri = 'https://www.cosmote.gr/selfcare/jsp/ajax/avdslavailabilityAjaxV2.jsp';
        
        $numbers = StreetNumber::with('street.postalCode')
        ->whereHas('street',function($q){
            $q->where('cosmote_street_name','!=','');
        })
        ->whereHas('street.postalCode',function($q){
            $q->where('code',10446);
        })->get();


        $client = new \GuzzleHttp\Client();


        foreach($numbers as $number){
            $streetName = mb_strtoupper($number->street->cosmote_street_name);

            // if($number->comsote_200 !== null || $number->comsote_200 !== null) continue;

            $this->comment("Checking: $number->description...");

            $response = $client->request('GET', $baseUri."?streetName=$streetName&stateId=52&municipalityId=706&_=1640807210566");

            $html = $response->getBody()->getContents();
            $doc = new \DOMDocument;
            $doc->loadHTML($html);
            $crawler = new Crawler;
            $crawler->addHTMLContent($html, 'UTF-8');

            
            $areas = [];
            $crawler->filter('li > a')->each(function ($node,$index) use(&$areas){
                if($index > 0){
                    $areas[] = $node->text();
                }
            });

            if(!sizeof($areas)){
                $this->comment('areas not found');
                continue;
            }

            foreach(collect($areas) as $area){
                $this->comment('Checking for Area: '.$area);

                $response = $client->request('POST', 'https://www.cosmote.gr/selfcare/jsp/ajax/avdslavailabilityAjaxV2.jsp', [
                    'headers' => [
                        "Content-Type" => "application/x-www-form-urlencoded; charset=UTF-8",
                    ],
                    'form_params' => [
                        'mTelno' => '',
                        'mAddress' => $streetName,
                        'mState'   => 'Ν. ΑΤΤΙΚΗΣ',
                        'mPrefecture' => 'Δ. ΑΘΗΝΑΙΩΝ',
                        'mNumber' => '2',
                        'mArea' => $area,
                        'searchcriteria' => 'address',
                        'ct' => 'res'
                    ]
                ]);

                $html = $response->getBody()->getContents();

                $doc = new \DOMDocument;
                $doc->loadHTML($html);
                $crawler = new Crawler;
                $crawler->addHTMLContent($html, 'UTF-8');

                $results = [];
                $crawler->filter('tr')->each(function ($node,$index) use(&$results){
                    $results[] = $node->text();
                });
            
            
                $results = collect($results);

            
                $cosmote200mpbs = $results->filter(function($value){
                    return mb_stripos($value,'Έως 200 Mbps Διαθέσιμο στην περιοχή σου! Δες τα πακέτα') !== false;
                })->count();
            
                $ftth = $results->filter(function($value){
                    return mb_stripos($value,'Έως 200 Mbps Διαθέσιμο στην περιοχή σου μέσω υποδομής Fiber To The Home') !== false;
                })->count();

                if($cosmote200mpbs){
                    $this->comment('200mbps found!');
                    $number->comsote_200 = true;
                    $number->cosmote_200_ftth = false;
                    $number->save();
                }
                if($ftth){
                    $this->comment('ftth found!');
                    $number->comsote_200 = true;
                    $number->cosmote_200_ftth = true;
                }

                if($ftth || $cosmote200mpbs){
                    $number->save();
                    break;
                }

                $number->comsote_200 = false;
                $number->cosmote_200_ftth = false;
                $number->save();


            }
 

        }

        $this->comment('-------------------------------------');


        return Command::SUCCESS;
    }
}
