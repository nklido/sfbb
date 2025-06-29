<?php

namespace App\Services\Cosmote;

use App\Models\StreetNumber;
use App\Services\CosmoteClient;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Support\Facades\Log;
use PHPUnit\Util\Exception;
use Symfony\Component\DomCrawler\Crawler;

class AvailabilityService
{

    private $client = null;
    public function __construct(CosmoteClient $client)
    {
        $this->client = $client;
    }


    /**
     * Return true if there is at least one area with
     * a 200Mbps fiber connection
     *
     * @throws GuzzleException
     */
    public function checkAvailability(StreetNumber $streetNumber): bool
    {

        Log::info('Checking availability', [
            'street' => $streetNumber->street->cosmote_street_name,
            'number' => $streetNumber->number,
        ]);
        $availabilities = [];
        $streetName = mb_strtoupper($streetNumber->street->cosmote_street_name);
        $areas = $this->client->getAreasForStreetName($streetName);

        if(!sizeof($areas)){
            throw new Exception('No areas found');
        }
        Log::info('Areas found', $areas);
        foreach($areas as $area){

            Log::info("Checking availability for area: $area");
            $results = $this->client->checkAvailability($area,$streetName,$streetNumber->number);
            $availabilities[] = collect($results)->filter(function ($value) {
                return mb_stripos($value, 'COSMOTE Fiber 200 Mbps Διαθέσιμο στην περιοχή σου μέσω υποδομής Fiber To The Home') !== false;
            })->count() > 0;

            Log::info('Availabilities found: ' . sizeof($availabilities));

        }

        return collect($availabilities)->filter()->count() > 0;
    }

}
