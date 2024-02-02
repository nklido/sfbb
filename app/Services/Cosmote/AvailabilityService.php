<?php

namespace App\Services\Cosmote;

use App\Models\StreetNumber;
use App\Services\CosmoteClient;
use GuzzleHttp\Exception\GuzzleException;
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
        $availabilities = [];


        $streetName = mb_strtoupper($streetNumber->street->cosmote_street_name);
        $areas = $this->client->getAreasForStreetName($streetName);

        if(!sizeof($areas)){
            throw new Exception('No areas found');
        }

        foreach($areas as $area){
            $results = $this->client->checkAvailability($area,$streetName,$streetNumber->number);
            $availabilities[] = collect($results)->filter(function ($value) {
                return mb_stripos($value, 'COSMOTE Fiber 200 Mbps Διαθέσιμο στην περιοχή σου μέσω υποδομής Fiber To The Home') !== false;
            })->count() > 0;
        }

        return collect($availabilities)->filter()->count() > 0;
    }

}
