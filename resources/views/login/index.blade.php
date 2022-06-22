<!DOCTYPE html>
<html lang="es-PE">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    @include('components.navbar');
    <h1>login</h1>
    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul> 
    @endif
    <form method="POST" action="/login" name='login'>
        @csrf
        <label for="correo">Correo</label>
        <input type="correo" name="correo" id="correo" required autofocus value='{{ old('correo') }}' placeholder="correo" >
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required placeholder="password">
        <label for="recuerdame">recuerdame</label>
        <input type="checkbox" name="recuerdame" id="recuerdame">
        <button type="submit">ingresar</button>
    </form>
</body>


<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1,
            shrink-to-fit=no">
        <meta name="description" content="Formulario de login con Bootstrap">
        <meta name="author" content="Parzibyte">
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        
    </head>

    <body>
        <main role="main" class="container my-auto">
            <div class="row">
                <div id="login" class="col-lg-4 offset-lg-4 col-md-6 offset-md-3
                    col-12">
                    <h2 class="text-center mb-3">Bienvenido de nuevo</h2>
                    <img src="resources/img/logo.png" alt="" class="img-fluid mx-auto d-block rounded">

                    <form>
                        <div class="form-group">
                            <label for="correo">Correo</label>
                            <input id="correo" name="correo"
                                class="form-control" type="email"
                                placeholder="Correo electrónico">
                        </div>
                        <div class="form-group">
                            <label for="palabraSecreta">Contraseña</label>
                            <input id="palabraSecreta" name="palabraSecreta"
                                class="form-control" type="password"
                                placeholder="Contraseña">
                        </div>
                        <button type="submit" class="btn btn-block btn-success mt-2">
                            Entrar
                        </button>
                        <br>
                        <div class="form-group d-md-flex mb-2">
		            	<div class="w-50 text-left">
                            <input type="checkbox" name="recuerdame" id="recuerdame" checked>
			            	    <label class="checkbox-wrap checkbox-primary">Recuérdame</label>
									</div>
									<div class="w-50 text-md-right">
										<a href="#" class="text-success">Contraseña olvidada</a>
									</div>
                                </div>
                    </form>
                        <p class="text-center">¿Aún no eres miembro? 
                            <a data-toggle="tab" class="text-success" href="#">Regístrate</a></p>
                    </form>
                </div>
            </div>
        </main>
    </body>
</html>