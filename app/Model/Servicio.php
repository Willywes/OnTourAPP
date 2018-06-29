<?php

namespace App\Model;

use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
   public static function all(){
        return static::get('servicios_adicionales');
    }
}
