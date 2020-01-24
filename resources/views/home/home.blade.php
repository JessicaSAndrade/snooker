<html>

<head>
<link href="{{ asset('css/home.css') }}" rel="stylesheet"> 
{{-- <link href="{{ asset('css/materialize.css') }}" rel="stylesheet"> --}}
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="container">
    <div class="login-box">
      {{-- <img src="{{ asset('img/logosnooker.png') }}" alt="logo" class="avatar"> --}}
        <div class="grupoFormularios">
            <div class="col-auto">
                <div class="ranking">
                    <div class="row">
                        @if($listar ?? '')
                            {{-- RANKING INICIO --}}
                            <div class="col-6">
                                <div class="bordasRanking">
                                    <div class="row">
                                        <div class="col-4">
                                    <h1 class="marginsTitulos">Ranking
                                        <img src="{{ asset('img/winner.png') }}" alt="logo" class="avatar">
                                    </h1>
                                        </div>
                                        <div class="col-8" style="margin-top: 10px;">
                                    <form class="form-inline" method="get">
                                        <div class="form-group mx-sm-3 mb-2">
                                        <label for="inputText" class="sr-only">Nome do jogador</label>
                                        <input type="text" class="form-control" id="nome_jogador" placeholder="Nome do jogador">
                                        </div>
                                        <button type="submit" class="btn btn-warning mb-2">Pesquisar Jogador</button>
                                    </form>
                                        </div>
                                    </div>
                                    <div class="tabela">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">id</th>
                                                    <th scope="col">Nome do Jogador</th>
                                                    <th scope="col">Total Ganho</th>
                                                    <th scope="col">Data da Partida</th>
                                                </tr>
                                            </thead>
                                            @foreach($jogador as $jogadores)
                                        <tbody>
                                            <tr>
                                                <th scope="row">{{$jogadores->jogador_id}}</th>
                                                <td>{{$jogadores->nome_jogador}}</td>
                                                <td>{{$jogadores->total_ganho}}</td>
                                                <td>{{$jogadores->data_partida}}</td>
                                        </tr>
                                        </tbody>
                                        @endforeach
                                    </table>
                                    </div>
                                </div>
                            </div>
                            {{-- RANKING FIM --}}
                        @endif
                        @if($ranking ?? '')
                            {{-- RANKING INICIO --}}
                            <div class="col-6">
                                <div class="bordasRanking">
                                    <div class="row">
                                        <div class="col-4">
                                    <h1 class="marginsTitulos">Ranking
                                        <img src="{{ asset('img/winner.png') }}" alt="logo" class="avatar">
                                    </h1>
                                        </div>
                                        <div class="col-8" style="margin-top: 10px;">
                                    <form class="form-inline" method="get">
                                        <div class="form-group mx-sm-3 mb-2">
                                        <label for="inputText" class="sr-only">Nome do jogador</label>
                                        <input type="text" class="form-control" id="nome_jogador" placeholder="Nome do jogador">
                                        </div>
                                        <button type="submit" class="btn btn-warning mb-2">Pesquisar Jogador</button>
                                    </form>
                                        </div>
                                    </div>
                                    <div class="tabela">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">id</th>
                                                    <th scope="col">Nome do Jogador</th>
                                                    <th scope="col">Total Ganho</th>
                                                    <th scope="col">Data da Partida</th>
                                                </tr>
                                            </thead>
                                            @foreach($jogador as $jogadores)
                                        <tbody>
                                            <tr>
                                                <th scope="row">{{$jogadores->jogador_id}}</th>
                                                <td>{{$jogadores->nome_jogador}}</td>
                                                <td>{{$jogadores->total_ganho}}</td>
                                                <td>{{$jogadores->data_partida}}</td>
                                        </tr>
                                        </tbody>
                                        @endforeach
                                    </table>
                                    </div>
                                </div>
                            </div>
                            {{-- RANKING FIM --}}
                        @endif
                        @if($individual ?? '')
                            {{-- RANKING INICIO --}}
                            <div class="col-6">
                                <div class="bordasRanking">
                                    <div class="row">
                                        <div class="col-8">
                                    <h1 class="marginsTitulos">Partida Individual
                                        <img src="{{ asset('img/duplaboll.png') }}" alt="logo" class="avatar">
                                    </h1>
                                        </div>
                                        <div class="col-12" style="margin-top: 10px;">
                                    <form class="form-inline" method="POST" action="{{ route('home.criarPartida') }}">
                                        @csrf
                                        <div class="form-row" style="margin-left: 20px">
                                            @for ($i = 1; $i < 3; $i++)
                                            <div class="col">
                                                <label>Jogador {{ $i }}</label>
                                              <input type="text" name="nome_jogador[]" class="form-control">
                                            </div>
                                            @endFor
                                            <div class="col">
                                                <label>Valor da Aposta</label>
                                              <input type="float" name="valor_aposta" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-row" style="margin-left: 39%; margin-top: 10%;">
                                            <div class="col-12">
                                                <button type="button" class="btn btn-success" href="{{ route('home.criarPartida') }}">Iniciar Partida</button>
                                            </div>
                                            <input id="tipo_partida" name="tipo_partida" type="hidden" value="I">
                                        </div>
                                    </form>
                                        </div>
                                    </div>
                                    <div class="tabela">

                                    </div>
                                </div>
                            </div>
                            {{-- RANKING FIM --}}
                        @endif
                        @if($dupla ?? '')
                            {{-- RANKING INICIO --}}
                            <div class="col-6">
                                <div class="bordasRanking">
                                    <div class="row">
                                        <div class="col-8">
                                    <h1 class="marginsTitulos">Partida Individual
                                        <img src="{{ asset('img/duplaboll.png') }}" alt="logo" class="avatar">
                                    </h1>
                                        </div>
                                        <div class="col-12" style="margin-top: 10px;">
                                    <form class="form-inline" method="POST" action="{{ route('home.criarPartida') }}">
                                        @csrf
                                        <div class="form-row" style="margin-left: 20px">
                                            @for ($i = 1; $i < 5; $i++)
                                            <div class="col">
                                                <label>Jogador {{ $i }}</label>
                                            <input type="text" name="nome_jogador[]" class="form-control">
                                            </div>
                                            @endFor
                                            <div class="col">
                                                <label>Valor da Aposta</label>
                                            <input type="float" name="valor_aposta" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-row" style="margin-left: 39%; margin-top: 10%;">
                                            <div class="col-12">
                                                <button type="button" class="btn btn-success" href="{{ route('home.criarPartida') }}">Iniciar Partida</button>
                                            </div>
                                            <input id="tipo_partida" name="tipo_partida" type="hidden" value="I">
                                        </div>
                                    </form>
                                        </div>
                                    </div>
                                    <div class="tabela">

                                    </div>
                                </div>
                            </div>
                            {{-- RANKING FIM --}}
                        @endif
                        @if($historico ?? '')
                            {{-- RANKING INICIO --}}
                            <div class="col-6">
                                <div class="bordasRanking">
                                    <div class="row">
                                        <div class="col10">
                                    <h1 class="marginsTitulosHistorico">Histórico de Pesquisa
                                        <img src="{{ asset('img/folder.png') }}" alt="logo" class="avatarFolder">
                                    </h1>
                                        </div>
                                        <div class="col-8" style="margin-top: 10px;">
                                        </div>
                                    </div>
                                    <div class="tabela">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">id partida</th>
                                                    <th scope="col">Jogador</th>
                                                    <th scope="col">Total Ganho</th>
                                                    <th scope="col">Data da Partida</th>
                                                    <th scope="col">Tipo de Partida</th>
                                                </tr>
                                            </thead>
                                            @foreach($jogador as $jogadores)
                                        <tbody>
                                            <tr>
                                                <td>{{$jogadores->partida_id}}</td>
                                                <td>{{$jogadores->nome_jogador}}</td>
                                                <td>{{$jogadores->total_ganho}}</td>
                                                <td>{{$jogadores->data_partida}}</td>
                                                <td>{{$jogadores->tipo_partida}}</td>
                                        </tr>
                                        </tbody>
                                        @endforeach
                                    </table>
                                    </div>
                                </div>
                            </div>
                            {{-- RANKING FIM --}}
                        @endif
                        <div class="col-5">
                            {{-- JOGADA INICIO --}}
                            <div style="margin-top: 70px;">
                                <div class="row" >
                                    <div class="col-7">
                                        <div class="card" style="width: 20rem;">
                                            <div class="decisao">
                                                <form class="form-inline" method="get" action="{{ route('home.individual') }}">
                                                    <input type=image src="{{ asset('img/individual.png') }}" class="imagemCards" width="25" height="15">
                                                </form> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4" >
                                        <div class="card" style="width: 20rem;">
                                            <div class="decisao">
                                                <form class="form-inline" method="get" action="{{ route('home.dupla') }}">
                                                    <input type=image src="{{ asset('img/DUPLA.png') }}" class="imagemCards" width="25" height="15">
                                                </form> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            {{-- JOGADA FIM --}}
                            {{-- JOGADA INICIO --}}
                                <div class="row" style="margin-top: 100px">
                                    <div class="col-7">
                                        <div class="card" style="width: 20rem;">
                                            <div class="decisao">
                                                <form class="form-inline" method="get" action="{{ route('home.ranking') }}">
                                                    <input type=image src="{{ asset('img/ranking.png') }}" class="imagemCards" width="25" height="15">
                                                </form> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4" >
                                        <div class="card" style="width: 20rem;">
                                            <div class="decisao">
                                                <form class="form-inline" method="get" action="{{ route('home.historico') }}">
                                                    <input type=image src="{{ asset('img/historico.png') }}" class="imagemCards" width="25" height="15">
                                                </form> 
                                            </div>
                                        </div>
                                    </div>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                            <div class="row justify-content-end" style="margin-top: 10%;margin-right: -100px;">
                                <form action="{{ route('login.sair') }}"  method="POST">@csrf
                                <button type="submit" class="btn btn-danger">Sair
                                </button>
                                </form>
                            </div>
                            {{-- JOGADA FIM --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>