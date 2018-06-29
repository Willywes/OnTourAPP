<?php

namespace App\Http\Controllers;

use App\Model\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::all();
        return view('cursos.index',  compact('cursos'));
    }

    public function create(){
        return view('cursos.create');
    }

    public function edit($id){
        $curso = Curso::get('cursos/' .  $id);
        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, $id){

        $response = Curso::post('cursos/' . $id, $request->all());

        if($response->status == 'error'){
            return redirect()->back()->withErrors($response->errors)->withInput();
        }else{
            session()->flash('success', 'Curso editado correctamente.');
            return redirect()->route('cursos.index');
        }

    }

    public function store(Request $request){
        $response = Curso::post('cursos', $request->all());

        if($response->status == 'error'){
            return redirect()->back()->withErrors($response->errors)->withInput();
        }else{
            session()->flash('success', 'Curso ingresado correctamente.');
            return redirect()->route('cursos.index');
        }

    }
}
