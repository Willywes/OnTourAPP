<?php

namespace App\Model;

class Rol extends ClientRest
{
    public static function all(){
        return static::get('roles');
    }
}