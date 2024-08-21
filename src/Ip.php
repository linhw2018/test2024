<?php

namespace Linhw2018\Test2024;

use GuzzleHttp\Client;

class Ip
{
    public function getCountry($ip)
    {
        $client = new Client();
        $response = $client->get("https://get.geojs.io/v1/ip/geo/{$ip}.json");
        if ($response->getStatusCode() == 200) {
            return json_decode($response->getBody());
        }
        return false;
    }
}
