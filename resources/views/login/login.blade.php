<html>

<head>
<link href="{{ asset('css/login.css') }}" rel="stylesheet"> 
{{-- <link href="{{ asset('css/materialize.css') }}" rel="stylesheet"> --}}
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body class="container">
    <div class="login-box">
      <img src="{{ asset('img/logosnooker.png') }}" alt="logo" class="avatar">
      <div class="grupoFormularios">
        <form action="{{route('login.entrar')}}" method="post">
            {{ csrf_field() }}
          <div class="col-auto">
            <label class="sr-only" for="email">Login</label>
            <div class="inputsLogin">
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="material-icons prefix">person</i>
                    </div>
                  </div>
                  <input type="text" name="email" class="form-control form-control-lg" placeholder="Login">
                </div>
            </div>
            <label class="sr-only" for="password">Senha</label>
            <div class="inputsLogin">
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="material-icons prefix">vpn_key</i>
                    </div>
                  </div>
                  <input type="password" name="senha" class="form-control form-control-lg"  placeholder="Senha">
                </div>
            </div>
              <div class="botoes">
                <button type="button" style="width: 45%; margin-right: 15px;" class="btn btn-success"  href="{{ route('login.entrar') }}">Entrar</button>
                <button type="button" style="width: 45%"class="btn btn-warning">Cadastre-se</button>
              </div>
          </div>
        </form>
        </div>
      </div> 
    </div>
</body>

</html>