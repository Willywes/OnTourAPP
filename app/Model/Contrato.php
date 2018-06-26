<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Contrato extends ClientRest
{
    public static function all(){
        return static::get('contratos');
    }
}
