<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Models\PostalCode;
use App\Models\Street;
use App\Models\StreetNumber;

class ImportStreetNumbers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'street_numbers:import';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Imports street numbers';

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


        $client = new \GuzzleHttp\Client(['base_uri' => 'https://submit.sfbb.gr/EligibilityCheck.aspx']);

        $streets = Street::with('postalCode')->get();


        foreach($streets as $index => $street){

            $postalCode = $street->postalCode;

            $this->comment("Index: $index: Requesting $street->name");
            $res = $client->request('GET', "?zip=$postalCode->code&address=$street->name");
            $contents = $res->getBody()->getContents();

            $start = strpos($contents,'var _availableAddressNumbers = ');
        
            $end = strpos($contents,'];',$start);
        
            $numbers = json_decode(substr($contents, $start + 31, $end - ($start + 31) + 1));


            foreach($numbers as $number){
                $street->numbers()->create(['number' => $number]);
            }
            
        }

        $this->comment('------------------------------------------------------------------------------');


        return Command::SUCCESS;
    }
}
