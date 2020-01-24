<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jogador;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use DateTime;
use Illuminate\Support\Facades\DB;
// use Partida;
Use App\Partida;
class HomeController extends Controller
{
    /**
     * Método para autenticação ao acesso das páginas de acordo com o login
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /*
     *   Método de inicio, passando após o login o acesso ao index principal 
     */
    public function index()
    {
        return redirect()->route('home.home');
        return view('home.home');
    }

    //Método responsável por listar todos os dados na home
    public function listar()
    {
        $listar['listar'] = true;
        $jogador = DB::table('jogador')
            ->join('it_partida', 'jogador.jogador_id', '=', 'it_partida.jogador_id')
            ->join('partida', 'jogador.partida_id', '=', 'partida.partida_id')
            ->select('jogador.jogador_id', 'jogador.nome_jogador', 'it_partida.total_ganho', 'partida.data_partida')
            ->orderBy('it_partida.total_ganho', 'desc')
            ->get();
        return view('home.home', compact('jogador', 'listar'));
    }


    //Método de logout
    public function sair()
    {
        Auth::logout();
        return redirect()->route('home');
    }

    //Ranking de usuários
    public function ranking()
    {

        $ranking['ranking'] = true;
        $jogador = DB::table('jogador')
        ->join('it_partida', 'jogador.jogador_id', '=', 'it_partida.jogador_id')
        ->join('partida', 'jogador.partida_id', '=', 'partida.partida_id')
        ->select('jogador.jogador_id', 'jogador.nome_jogador', 'it_partida.total_ganho', 'partida.data_partida')
        ->orderBy('it_partida.total_ganho', 'desc')
        ->get();
        return view('home.home', compact('ranking', 'jogador'));
    }

    //Função para iniciar a partida em dupla
    public function dupla()
    {

        $dupla['dupla'] = true;
        $jogador = DB::table('jogador')
        ->join('it_partida', 'jogador.jogador_id', '=', 'it_partida.jogador_id')
        ->join('partida', 'jogador.partida_id', '=', 'partida.partida_id')
        ->select('jogador.jogador_id', 'jogador.nome_jogador', 'it_partida.total_ganho', 'partida.data_partida')
        ->orderBy('it_partida.total_ganho', 'desc')
        ->get();
        return view('home.home', compact('dupla', 'jogador'));
    }

    //Função para iniciar uma partida individual
    public function individual()
    {
        $individual['individual'] = true;
        $jogador = DB::table('jogador')
        ->join('it_partida', 'jogador.jogador_id', '=', 'it_partida.jogador_id')
        ->join('partida', 'jogador.partida_id', '=', 'partida.partida_id')
        ->select('jogador.jogador_id', 'jogador.nome_jogador', 'it_partida.total_ganho', 'partida.data_partida')
        ->orderBy('it_partida.total_ganho', 'desc')
        ->get();
        return view('home.home', compact('individual', 'jogador'));
    }


    // Função para criação de partida
    public function criarPartida(Request $req)
    {
        $now = new DateTime();
        $partida = new Partida;
        $partida->partida_id = 19;
        $partida->data_partida = $now;
        $partida->tipo_partida = $req->get('tipo_partida');
        $partida->valor_aposta = $req->get('valor_aposta');
        $partida->save();
        Partida::create($partida);
        return redirect()->route('/home/individual');

    //   $dados = $req->all();


    //   $jogador->nome = $req->get('nome_jogador[]'); // Vem do Form
    //   $jogador->email = $req->get('email'); // Vem do Form
    //   $jogador->telefone = $req->get('telefone'); // Vem do Form
    //   $jogador->save();
    
    //   Jogador::create($dados);



    //   return redirect()->route('admin.cursos');

    }
    public function historico()
    {
        $historico['historico'] = true;
        $jogador = DB::table('jogador')
        ->join('it_partida', 'jogador.jogador_id', '=', 'it_partida.jogador_id')
        ->join('partida', 'jogador.partida_id', '=', 'partida.partida_id')
        ->select('jogador.jogador_id', 'jogador.nome_jogador', 'it_partida.total_ganho', 'partida.data_partida', 'partida.partida_id','partida.tipo_partida')
        ->orderBy('it_partida.total_ganho', 'desc')
        ->get();
        return view('home.home', compact('historico', 'jogador'));

    }
}
