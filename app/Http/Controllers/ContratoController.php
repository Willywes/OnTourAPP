<?php

namespace App\Http\Controllers;

use App\Model\Contrato;
use App\Model\Curso;
use App\Model\Rol;
use App\Model\Servicio;
use App\Model\Tour;
use App\Model\Usuario;
use Illuminate\Http\Request;

class ContratoController extends Controller
{

    public function index()
    {
        $contratos = Contrato::all();
        return view('contratos.index',  compact('contratos'));
    }

    public function create(){
        $tours = Tour::all();
        $servicios = Servicio::all();
        return view('contratos.create', compact('tours'), compact('servicios'));
    }

    public function edit(){
        $roles = Rol::all();
        return view('contratos.edit', compact('roles'));
    }

    public function store(Request $request){
        //return $request->all();

        $reponse_curso = Curso::post('cursos', [
            'nombre' => $request->nombre_curso,
            'descripcion' => $request->descripcion_curso
        ]);


        $reponse_representante = Usuario::post('usuarios', [
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'paterno' => $request->paterno,
            'materno' => $request->materno,
            'nombres' => $request->nombres,
            'telefono' => $request->telefono,
            'celular' => $request->celular,
            'rol_id' => 5,

        ]);

        $tour = Tour::get('tours/' .  $request->tour_id);

        $request->servicios;

        $total = 0;

        if($request->servicios){
            foreach ($request->servicios as $id){
                $ser = Servicio::get('servicios-adicionales/' .  $id);
                $total = $total + $ser->precio;
            }
        }

        $contrac = [
            'fecha' => date("Y-m-d H:i:s"),
            'nombre_colegio' => $request->nombre_colegio,
            'subtotal' => $tour->precio_base,
            'total' => ($total + $tour->precio_base),
            'representante_id' => $reponse_representante->entity->id,
            'tour_id' => $request->tour_id,
            'curso_id' => $reponse_curso->entity->id
        ];

        $response = Contrato::post('contratos', $contrac);

        if($response->status == 'error'){
            return redirect()->back()->withErrors($response->errors)->withInput();
        }else{
            session()->flash('success', 'Contrato ingresado correctamente.');
            return redirect()->route('contratos.index');
        }
    }

    public function show($id)
    {
        $cursos = Curso::all();
        $servicio = Servicio::all();
        $user = Usuario::all();
        $tour = Tour::all();
        $rol = Rol::all();
        $destinos = Destino::all();
        $contrato = Contrato::get('contratos/' .  $id);
        return view('contratos.show', compact('cursos'), compact('servicio'),compact('user'),compact('tour'),compact('rol'),compact('destinos'),compact('contrato'));
    }
}
