<?php

namespace App\Http\Controllers;

use App\Model\Usuario;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function __construct()
    {
        return $this->middleware('guest', ['only' => ['showLogin', 'login']]);
    }

    public function showLogin(){

        return view('access.login');
    }

    public function login(Request $request){

        $response = Usuario::post('login' , $request->all());

        if(isset($response->errors)){
            return back()->withErrors([
                    'errors' => [
                        'username' => $response->errors->message
                    ]
                ]
            );

        }else {
            

            Auth::loginUsingId($response->entity->id);
            //return Auth::user();
            return redirect()->route('dashboard');

        }


    }

    public function logout(){
        session()->flush();
        Auth::logout();
        return redirect('/');
    }
}
