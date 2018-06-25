<?php

namespace App\Http\Controllers;


use App\Model\Usuario;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $usuarios = Usuario::all();
        return view('usuarios.index',  compact('usuarios'));
    }

}
