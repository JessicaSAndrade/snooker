<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Http\Requests;
//use Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('login.login');
    }

    public function entrar(Request $req)
    {
        $dados = $req->all();
        if (Auth::attemp(['email' => $dados, 'password' => $dados['password']])) {
            //return view('home.home');
            return redirect()->route('home.home');
            echo "login";
        }

        return redirect()->route('login.login');
        echo "erro";
    }

    public function sair()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
