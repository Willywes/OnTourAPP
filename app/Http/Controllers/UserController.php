<?php

namespace App\Http\Controllers;

use App\User;
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

    public function edit($id){
        $roles = Rol::all();
        $user = Usuario::get('usuarios/' .  $id);
        return view('usuarios.edit', compact('roles'), compact('user'));
    }

    public function update(Request $request, $id){

        $response = Usuario::post('usuarios/' . $id, $request->all());

        if($response->status == 'error'){
            return redirect()->back()->withErrors($response->errors)->withInput();
        }else{
            session()->flash('success', 'Usuario editado correctamente.');
            return redirect()->route('usuarios.index');
        }

    }

    public function store(Request $request){
        $response = Usuario::post('usuarios', $request->all());

        if($response->status == 'error'){
            return redirect()->back()->withErrors($response->errors)->withInput();
        }else{
            session()->flash('success', 'Usuario registrado correctamente.');
            return redirect()->route('usuarios.index');
        }
    }

    public function show($id)
    {
        $roles = Rol::all();
        $user = Usuario::get('usuarios/' .  $id);
        return view('usuarios.show', compact('roles'), compact('user'));
    }

    public function destroy($id)
    {
        try{
            $user = User::find($id);

            if($user){
                $user->delete();
                return ControllerUtils::successResponseJson(null, "Usuario eliminado correctamente.");
            }else{
                return ControllerUtils::errorResponseJson('El Usuario a eliminar no éxiste.');
            }


        }catch(\Exception $e){
            return ControllerUtils::errorResponseJson('Error al eliminar al usuario.');
        }

    }


}
