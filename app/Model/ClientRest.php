<?php

namespace App\Model;

use GuzzleHttp\Client;


class ClientRest
{

    public static function get($url){

        $client = new Client([

            'base_uri' => 'http://api.ontour.tucreativa.cl'

        ]);

        $response = $client->request('GET', $url);
        return  json_decode($response->getBody()->getContents());
    }
}