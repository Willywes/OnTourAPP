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
    
    public static function post($url, $body){

        $client = new Client([

            'base_uri' => 'http://api.ontour.tucreativa.cl'

        ]);

        $response = $client->request('POST',  $url , [
            'form_params' => $body
        ]);


//        $client = new \GuzzleHttp\Client();
//
//        $request = $client->post("http://api.ontour.tucreativa.cl/" . $url,  ['body'=> $body]);
//
//        $response = $request->send();
        return  json_decode($response->getBody()->getContents());
    }
}