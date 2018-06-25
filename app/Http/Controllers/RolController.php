<?php

namespace App\Http\Controllers;

use App\Model\Rol;
use Illuminate\Http\Request;

class RolController extends Controller
{

    public function index(){
        return Rol::all();
    }
}
