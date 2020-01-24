<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1"> --}}

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

<link href="{{ asset('css/login.css') }}" rel="stylesheet"> 
{{-- <link href="{{ asset('css/materialize.css') }}" rel="stylesheet"> --}}
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
</head>
<body class="container">
    <div class="login-box">
        <img src="{{ asset('img/logosnooker.png') }}" alt="logo" class="avatar">
            <div class="grupoFormularios">
                <form method="POST" action="{{ route('login') }}">
                        @csrf
                    <div class="col-auto">
                        {{-- Login --}}
                        <label class="sr-only" for="email">Login</label>
                        <div class="inputsLogin">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                    <i class="material-icons prefix">person</i>
                                    </div>
                                </div>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Usuário" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div> 
                        </div>
                        {{-- senha --}}
                        <label class="sr-only" for="password">Senha</label>
                        <div class="inputsLoginSenha">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="material-icons prefix">vpn_key</i>
                                </div>
                                </div>
                                <input id="password" placeholder="Senha" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div>
                                <input  type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label  for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>

                        <div class="botoes">
                            <button type="submit" style="width: 94%; margin-right: 15px;" class="btn btn-success" >{{ __('Login') }}</button>
                            {{-- <button type="button" style="width: 45%" class="btn btn-warning" href="{{ route('register') }}">Cadastre-se</button> --}}
                          </div>
                        </div>
                    </div>
                </form>
            </div>
    </div>
</div>
</body>
</html>
