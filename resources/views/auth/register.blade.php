<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tienda</title>

    <!-- Bootstrap -->
    <link href="{{ url('/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    
    <!-- Animate.css -->
    <link href="{{ url('/assets/css/animate.min.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ url('/assets/css/custom.css') }}" rel="stylesheet">
  </head>

  <body class="login">
    <div>

      <!-- <a class="hiddenanchor" id="signup"></a> -->

      <!-- <a class="hiddenanchor" id="signin"></a> -->
     

      @if($errors->any())
        <div class="alert alert-danger alert-dismissible" data-auto-dismiss="1500">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-ban"></i> ¡El formulario contiene errores!</h4>
            <ul>
                @foreach($errors->all() as $error)
                    <li> {{ $error }} </li>
                @endforeach
            </ul>
        </div>
      @endif
    <div class="login_wrapper">


      <!-- Registro -->
      
      <div id="register" class="animate form">
            <section class="login_content">
                <form method="POST" action="{{ route('registro.post') }}">
                @csrf
                @method('POST')
                    <h1>Registro Usuario</h1>
                    <span class="row">
                        <div class="col-sm-12 col-md-6">
                            <input type="text" class="form-control" autocomplete="off" placeholder="Nombre" name="name"  />
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <input type="text" class="form-control" autocomplete="off" placeholder="Apellidos" name="lastname"  />
                        </div>
                    </span>
                    <div>
                        <input type="email" class="form-control" autocomplete="off" placeholder="Email" name="email"  />
                    </div>
                    <div>
                        <input type="password" class="form-control" autocomplete="off" placeholder="Password"  name="password"  />
                    </div>
                    <!-- <div>
                        <input type="password" class="form-control" autocomplete="off" placeholder="Password"  name="password_confirmation" required />
                    </div> -->
                    <div>
                        <input type="submit" style="margin:0;" class="btn btn-outline-info btn-block" value="Registrarse">
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">
                    <p class="change_link">Ya tienes cuenta ?
                        <a href="{{ route('login') }}" class="to_register"> Inicia Sesion </a>
                    </p>

                    <div class="clearfix"></div>
                    <br />
                    </div>
                </form>
            </section>
        </div>

      <!-- END Registro -->
      </div>
    </div>
  </body>
</html>
