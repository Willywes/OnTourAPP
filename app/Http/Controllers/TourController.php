<?php

namespace App\Http\Controllers;

use App\Model\Destino;
use App\Model\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    public function index()
    {
        $tours = Tour::all();
        return view('tours.index',  compact('tours'));
    }

    public function create(){
        $destinos = Destino::all();
        return view('tours.create', compact('destinos'));
    }

    public function edit($id){
        $destinos = Destino::all();
        $tour = Tour::get('tours/' .  $id);
        return view('tours.edit', compact('destinos'), compact('tour'));
    }

    public function update(Request $request, $id){

        $response = Tour::post('tours/' . $id, $request->all());

        if($response->status == 'error'){
            return redirect()->back()->withErrors($response->errors)->withInput();
        }else{
            session()->flash('success', 'Tour editado correctamente.');
            return redirect()->route('tours.index');
        }

    }

    public function store(Request $request){
        $response = Tour::post('tours', $request->all());
        if($response->status == 'error'){
            return redirect()->back()->withErrors($response->errors)->withInput();
        }else{
            session()->flash('success', 'Tour registrado correctamente.');
            return redirect()->route('tours.index');
        }

    }

    public function show($id)
    {
        $destinos = Destino::all();
        $tour = Tour::get('tours/' .  $id);
        return view('tours.show', compact('destinos'), compact('tour'));
    }

    public function destroy($id)
    {

        $tour = Tour::get('tours/' .  $id);
        if (!$tour) {
            return redirect()->back()->withErrors(['message' =>  'Error tour no encontrado.']);
        }else{
            try{
                $response = Tour::delete('tours/' . $id);
                if($response->status == 'error'){
                    return redirect()->back()->withErrors(['message' =>  'Error al intentar eliminar el tour.']);
                }else{
                    session()->flash('success', 'Tour eliminado correctamente.');
                    return redirect()->route('tours.index');
                }
                
            }catch(\Exception $ex){
                return redirect()->back()->withErrors(['message' =>  'Error al intentar eliminar el tour.']);
            }
        }
    }
}
