<?php

namespace App\Model;

use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Model;

class Servicio extends ClientRest
{
   public static function all(){
        return static::get('servicios-adicionales');
    }
}
