<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jogador;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return redirect()->route('home.home');
        return view('home.home');
    }

    public function listar()
    {
        $jogador = DB::table('jogador')
        ->join('it_partida', 'jogador.jogador_id', '=', 'it_partida.jogador_id')
        ->join('partida', 'jogador.partida_id', '=', 'partida.partida_id')
        ->select('jogador.jogador_id', 'jogador.nome_jogador', 'it_partida.total_ganho', 'partida.data_partida')
        ->orderBy('it_partida.total_ganho', 'desc')
        ->get();
      return view('home.home',compact('jogador'));
    }

    public function sair()
    {
        Auth::logout();
        return redirect()->route('home');
    }

    public function ranking()
    {
        Auth::logout();
        return redirect()->route('home');
    }

    public function dupla()
    {
        Auth::logout();
        return redirect()->route('home');
    }

    public function individual()
    {
        Auth::logout();
        return redirect()->route('home');
    }

    public function historico()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
