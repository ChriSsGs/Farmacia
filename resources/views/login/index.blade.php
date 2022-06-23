<!DOCTYPE html>
<html lang="es-PE">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
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
    <!-- @include('components.navbar');
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
        <input type="correo" name="correo" id="correo" required autofocus value='{{ old(' correo ') }}' placeholder="correo">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required placeholder="password">
        <label for="recuerdame">recuerdame</label>
        <input type="checkbox" name="recuerdame" id="recuerdame">
        <button type="submit">ingresar</button>
    </form> -->
</body>

<body>
    <div class="fixed-top">
        <nav class="navbar navbar-expand-lg navbar-dark bg-success">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <a class="navbar-brand" class="navbar-nav d-lg-none" href="#">Hidden brand</a>
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" class="navbar-nav d-lg-none" href="#">Inicio<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contacto</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav justify-content-end nav-top">
                        <li>
                            <a href="#" id="" class="nav-link">
                                <i class="fas fa-user"></i>
                                <span class="customer-name"><i class="bi bi-person-circle"></i> Iniciar sesión</span>
                            </a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                        <button class="btn btn-dark my-2 my-sm-0" type="submit"><i class="bi bi-search"></i></button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
    
    <section class="vh-100">
        <div class="container pt-5 h-100 mt-10">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg" class="img-fluid" alt="Phone image">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    <div class="mb-4">
                        <h2 class="text-center">¡Bienvenido!</h2>
                    </div>
                    <!-- Formulario  -->
                    <form>
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="correo">Correo</label>
                            <input type="email" id="correo" name="correo" class="form-control form-control-lg" />
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="palabraSecreta">Contraseña</label>
                            <input type="password" id="palabraSecreta" name="palabraSecreta" class="form-control form-control-lg" />
                        </div>

                        <div class="d-flex justify-content-around align-items-center mb-4">
                            <!-- Checkbox -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" name="recuerdame" id="recuerdame" checked />
                                <label class="form-check-label" for=""> Recuérdame</label>
                            </div>

                            <a href="#" class="text-success">Olvidé la contraseña</a>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-success btn-lg btn-block">Entrar</button>
                        <hr>
                        <p class="text-center">¿Aún no eres miembro?
                            <a data-toggle="tab" class="text-success" href="#">
                                <br>Regístrate</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <div class="container">
        <hr>
        <footer>
            <div class="row">
                <div class="col-12 text-center">
                    <p>&copy; 2022 Farmacia. Todos los derechos reservados.</p>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>