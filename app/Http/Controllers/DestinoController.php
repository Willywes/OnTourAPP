<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Destino;

class DestinoController extends Controller
{
    public function index()
    {
        $destinos = Destino::all();
        return view('destinos.index',  compact('destinos'));
    }

    public function create(){
        return view('destinos.create');
    }

    public function edit($id){
        $destino = Destino::get('destinos/' .  $id);
        return view('destinos.edit', compact('destino'));
    }

    public function update(Request $request, $id){

        $response = Destino::post('destinos/' . $id, $request->all());

        if($response->status == 'error'){
            return redirect()->back()->withErrors($response->errors)->withInput();
        }else{
            session()->flash('success', 'Destino editado correctamente.');
            return redirect()->route('destinos.index');
        }

    }

    public function store(Request $request){
        $response = Destino::post('destinos', $request->all());

        if($response->status == 'error'){
            return redirect()->back()->withErrors($response->errors)->withInput();
        }else{
            session()->flash('success', 'Destino ingresado correctamente.');
            return redirect()->route('destinos.index');
        }
    }

    public function show($id)
    {
        $destino = Destino::get('destinos/' .  $id);
        return view('destinos.show',  compact('destino'));
    }

    public function destroy($id)
    {

        $destino = Destino::get('destinos/' .  $id);
        if (!$destino) {
            return redirect()->back()->withErrors(['message' =>  'Error destino no encontrado.']);
        }else{
            try{
                $response = Destino::delete('destinos/' . $id);
                if($response->status == 'error'){
                    return redirect()->back()->withErrors(['message' =>  'Error al intentar eliminar el destino.']);
                }else{
                    session()->flash('success', 'Destino eliminado correctamente.');
                    return redirect()->route('destinos.index');
                }
                
            }catch(\Exception $ex){
                return redirect()->back()->withErrors(['message' =>  'Error al intentar eliminar el destino.']);
            }
        }
    }
}
