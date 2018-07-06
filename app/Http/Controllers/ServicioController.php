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
        $servicio_adicional = Servicio::get('servicios-adicionales/' .  $id);
        return view('servicios_adicionales.edit', compact('servicio_adicional'));
    }

    public function update(Request $request, $id){

        $response = Servicio::post('servicios-adicionales/' . $id, $request->all());

        if($response->status == 'error'){
            return redirect()->back()->withErrors($response->errors)->withInput();
        }else{
            session()->flash('success', 'Servicio editado correctamente.');
            return redirect()->route('servicios-adicionales.index');
        }

    }

    public function store(Request $request){
        $response = Servicio::post('servicios-adicionales', $request->all());

        if($response->status == 'error'){
            return redirect()->back()->withErrors($response->errors)->withInput();
        }else{
            session()->flash('success', 'Servicio ingresado correctamente.');
            return redirect()->route('servicios-adicionales.index');
        }
    }

    public function show($id)
    {
        $servicio = Servicio::get('servicios-adicionales/' .  $id);
        return view('servicios_adicionales.show',  compact('servicio'));
    }

    public function destroy($id)
    {

        $servicio = Servicio::get('servicios-adicionales/' .  $id);
        if (!$servicio) {
            return redirect()->back()->withErrors(['message' =>  'Error servicio no encontrado.']);
        }else{
            try{
                $response = Servicio::delete('servicios-adicionales/' . $id);
                if($response->status == 'error'){
                    return redirect()->back()->withErrors(['message' =>  'Error al intentar eliminar el Servicio.']);
                }else{
                    session()->flash('success', 'Servicio eliminado correctamente.');
                    return redirect()->route('servicios-adicionales.index');
                }
                
            }catch(\Exception $ex){
                return redirect()->back()->withErrors(['message' =>  'Error al intentar eliminar el Servicio.']);
            }
        }
    }
}
