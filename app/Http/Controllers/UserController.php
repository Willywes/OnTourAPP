<?php

namespace App\Http\Controllers;


use App\Model\Rol;
use App\Model\Usuario;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $usuarios = Usuario::all();
        return view('usuarios.index',  compact('usuarios'));
    }

    public function create(){
        $roles = Rol::all();
        return view('usuarios.create', compact('roles'));
    }

    public function edit(){
        $roles = Rol::all();
        return view('usuarios.edit', compact('roles'));
    }

}
