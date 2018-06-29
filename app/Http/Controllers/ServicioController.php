<?php

namespace App\Http\Controllers;

use App\Model\Servicio;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    public function index()
    {
        $servicios_adicionales = Servicio::all();
        return view('servicios_adicionales.index',  compact('servicios_adicionales'));
    }

    public function create(){
        return view('servicios_adicionales.create');
    }

    public function edit($id){
        $servicio_adicional = Servicio::get('servicios_adicionales/' .  $id);
        return view('servicios_adicionales.edit', compact('servicio_adicional'));
    }

    public function update(Request $request, $id){

        $response = Servicio::post('servicios_adicionales/' . $id, $request->all());

        if($response->status == 'error'){
            return redirect()->back()->withErrors($response->errors)->withInput();
        }else{
            session()->flash('success', 'Servicio editado correctamente.');
            return redirect()->route('servicios_adicionales.index');
        }

    }

    public function store(Request $request){
        $response = Servicio::post('servicios_adicionales', $request->all());

        if($response->status == 'error'){
            return redirect()->back()->withErrors($response->errors)->withInput();
        }else{
            session()->flash('success', 'Servicio ingresado correctamente.');
            return redirect()->route('servicios_adicionales.index');
        }

    }
}