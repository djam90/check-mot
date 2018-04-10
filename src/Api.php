<?php

namespace Djam90\CheckMot;

use GuzzleHttp\Client;

class Api
{
    /**
     * Api constructor.
     *
     * @param string $apiKey The API key.
     */
    public function __construct(string $apiKey = null)
    {
        $this->client = new Client([
            'base_uri' => 'https://beta.check-mot.service.gov.uk',
            'headers' => [
                'x-api-key' => $apiKey
            ]
        ]);
    }

    /**
     * Get the MOT history for a given registration number.
     *
     * @param string $registrationNumber The registration number.
     * @return array
     */
    public function getMotHistory($registrationNumber)
    {
        $uri = '/trade/vehicles/mot-tests';

        $response = $this->client->get($uri, [
            'query' => [
                'registration' => $registrationNumber
            ]
        ]);

        $body = (string) $response->getBody();
        return json_decode($body, true);
    }
}