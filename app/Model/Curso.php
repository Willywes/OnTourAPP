<?php

namespace App\Model;

use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Model;

class Curso extends ClientRest
{
    public static function all(){
        return static::get('cursos');
    }
}
