<?php

namespace App\Model;

use App\Model\ClientRest;
use Illuminate\Database\Eloquent\Model;

class Dashboard extends ClientRest
{
    public static function all(){
        return static::get('dashboard');
    }
}
