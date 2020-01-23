<html>

<head>
<link href="{{ asset('css/home.css') }}" rel="stylesheet"> 
{{-- <link href="{{ asset('css/materialize.css') }}" rel="stylesheet"> --}}
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body class="container">
    <div class="login-box">
      {{-- <img src="{{ asset('img/logosnooker.png') }}" alt="logo" class="avatar"> --}}
        <div class="grupoFormularios">
            <div class="col-auto">
                <div class="ranking">
                    <div class="row">
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
                        <div class="col-5">
                            {{-- JOGADA INICIO --}}
                            <div style="margin-top: 70px;">
                                <div class="row" >
                                    <div class="col-7">
                                        <div class="card" style="width: 20rem;">
                                            <div class="decisao">
                                    <form class="form-inline" method="get" href="{{ route('home.individual') }}">
                                        <img src="{{ asset('img/individual.png') }}"  alt="logo" class="imagemCards">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4" >
                                        <div class="card" style="width: 20rem;">
                                            <div class="decisao">
                                    <form class="form-inline" method="get" href="{{ route('home.dupla') }}">
                                        <img src="{{ asset('img/DUPLA.png') }}"  alt="logo" class="imagemCards">
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
                                    <form class="form-inline" method="get" href="{{ route('home.home') }}">
                                        <img src="{{ asset('img/ranking.png') }}"  alt="logo" class="imagemCards">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4" >
                                        <div class="card" style="width: 20rem;">
                                            <div class="decisao">
                                    <form class="form-inline" method="get" href="{{ route('home.historico') }}">
                                        <img src="{{ asset('img/historico.png') }}"  alt="logo" class="imagemCards">
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