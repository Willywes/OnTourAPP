<?php

namespace App\Http\Controllers;

use App\Model\Contrato;
use Illuminate\Http\Request;

class ContratoController extends Controller
{

    public function index()
    {
        $contratos = Contrato::all();
        return view('contratos.index',  compact('contratos'));
    }

    public function create(){
        $roles = Rol::all();
        return view('contratos.create', compact('roles'));
    }

    public function edit(){
        $roles = Rol::all();
        return view('contratos.edit', compact('roles'));
    }

}
