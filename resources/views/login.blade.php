<html>

<head>
<link href="{{ asset('css/login.css') }}" rel="stylesheet"> 
{{-- <link href="{{ asset('css/materialize.css') }}" rel="stylesheet"> --}}
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body class="container">
    <div class="login-box">
      <div class="grupoFormularios">
        <div class="col-auto">
          <label class="sr-only" for="inlineFormInputGroup">Login</label>
          <div class="inputsLogin">
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="material-icons prefix">person</i>
                  </div>
                </div>
                <input type="text" class="form-control form-control-lg" id="inlineFormInputGroup" placeholder="Login">
              </div>
          </div>
          <label class="sr-only" for="inlineFormInputGroup">Senha</label>
          <div class="inputsLogin">
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="material-icons prefix">vpn_key</i>
                  </div>
                </div>
                <input type="password" class="form-control form-control-lg" id="inlineFormInputGroup" placeholder="Senha">
              </div>
          </div>
            <div class="botoes">
              <button type="button" style="width: 45%; margin-right: 15px;" class="btn btn-success">Entrar</button>

              <button type="button" style="width: 45%"class="btn btn-warning">Cadastre-se</button>
            </div>
        </div>
        </div>
      </div>
    </div>
</body>

</html>