<?php

namespace App\Services;

use App\Parsers\Cosmote\AreaHtmlParser;
use App\Parsers\Cosmote\AvailabilityParser;
use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Support\Facades\Log;

class CosmoteClient
{
    private ?string $availabilityUrl;

    private ?string $areaUrl;

    protected ?Client $client = null;

    protected ?AreaHtmlParser $areaHtmlParser = null;

    protected ?AvailabilityParser $availabilityParser = null;

    public function __construct(Client $client, AreaHtmlParser $areaHtmlParser, AvailabilityParser $availabilityParser)
    {
        $this->client = $client;
        $this->areaHtmlParser = $areaHtmlParser;
        $this->availabilityParser = $availabilityParser;
        $this->availabilityUrl = config('cosmote.availability_url');
        $this->areaUrl = config('cosmote.area_url');
    }

    /**
     * @param $area
     * @param $streetName
     * @param $number
     * @throws Exception
     * @return array
     */
    public function checkAvailability($area, $streetName, $number): array
    {
        try {
            $response = $this->client->request('POST', $this->availabilityUrl, [
                'connect_timeout' => 5,
                'timeout' => 5,
                'headers' => [
                    "Content-Type" => "application/x-www-form-urlencoded; charset=UTF-8",
                    "Accept-Language" => "en-US,en;q=0.5",
                    "Accept-Encoding" => "gzip, deflate, br"
                ],
                'form_params' => [
                    'mTelno' => '',
                    'mAddress' => $streetName,
                    'mState' => 'Ν. ΑΤΤΙΚΗΣ',
                    'mPrefecture' => 'Δ. ΑΘΗΝΑΙΩΝ',
                    'mNumber' => $number,
                    'mArea' => $area,
                    'searchcriteria' => 'address',
                    'ct' => 'res'
                ]
            ]);
        } catch (ConnectException $e) {
            Log::error($e);
            throw new Exception("Connection failed");
        } catch (GuzzleException $e) {
            Log::error($e);
            throw new Exception("Error processing request");
        }

        return $this->availabilityParser->parse($response->getBody()->getContents());
    }

    /**
     * @throws GuzzleException
     */
    public function getAreasForStreetName(string $streetName): array
    {
        $response = $this->client->request('GET', "$this->areaUrl?streetName=$streetName&stateId=52&municipalityId=706&_=1640807210566");
        $html = $response->getBody()->getContents();
        return $this->areaHtmlParser->parse($html);
    }
}
