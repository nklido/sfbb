<?php

namespace App\Services;

use App\Parsers\Cosmote\AreaHtmlParser;
use App\Parsers\Cosmote\AvailabilityParser;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class CosmoteClient
{

    private $availabilityUrl = "https://my.cosmote.gr/selfcare/jsp/ajax/avdslavailabilityAjaxV2.jsp";
    private $areaUrl = "https://www.cosmote.gr/eshop/global/gadgets/populateAddressDetailsV3.jsp";

    protected $client = null;
    protected $areaHtmlParser = null;
    protected $availabilityParser = null;
    public function __construct(Client $client, AreaHtmlParser $areaHtmlParser, AvailabilityParser  $availabilityParser){
        $this->client = $client;
        $this->areaHtmlParser = $areaHtmlParser;
        $this->availabilityParser = $availabilityParser;
    }

    /**
     * @throws GuzzleException
     */
    public function checkAvailability($area, $streetName, $number): array
    {

        $response = $this->client->request('POST', 'https://my.cosmote.gr/selfcare/jsp/ajax/avdslavailabilityAjaxV2.jsp', [
            'headers' => [
                "Content-Type" => "application/x-www-form-urlencoded; charset=UTF-8",
                "Accept-Language" => "en-US,en;q=0.5",
                "Accept-Encoding" => "gzip, deflate, br"
            ],
            'form_params' => [
                'mTelno' => '',
                'mAddress' => $streetName,
                'mState'   => 'Ν. ΑΤΤΙΚΗΣ',
                'mPrefecture' => 'Δ. ΑΘΗΝΑΙΩΝ',
                'mNumber' => $number,
                'mArea' => $area,
                'searchcriteria' => 'address',
                'ct' => 'res'
            ]
        ]);

        return $this->availabilityParser->parse($response->getBody()->getContents());
    }



    /**
     * @throws GuzzleException
     */
    public function getAreasForStreetName(string $streetName): array
    {
        $response = $this->client->request('GET', "$this->areaUrl?streetName=$streetName&stateId=52&municipalityId=706&_=1640807210566");

        $html = $response->getBody()->getContents();
        file_put_contents('area_response_success.html',$html);
        return $this->areaHtmlParser->parse($html);
    }

}
