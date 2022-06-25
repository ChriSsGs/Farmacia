<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
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
    <!-- Nav Bar -->
    <div class="fixed-top">
        <nav class="navbar navbar-expand-lg navbar-dark bg-success">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <a class="navbar-brand" class="navbar-nav d-lg-none" href="#">
                        <img src="logo2.png" alt="" width="50" height="50">
                    </a>
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" class="navbar-nav d-lg-none" href="#">Inicio<span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contacto</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav justify-content-end nav-top">
                        <li class="nav-item">
                            <a href="resources/views/login/index.php" id="" class="nav-link">
                                <i class="bi bi-person-circle"></i> Iniciar sesión
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
    <!-- Fin de Nav Bar -->
    
    <!-- Termina la definición del menú -->
        <main role="main" class="container" style="margin-top: 6rem;">
            <div class="card card-default card-body bg-light">
                <div class="row">
                    <div class="col-12">
                        <h2>Formulario de Contacto</h2>
                    </div>
                    <div class="col-12">
                        <form method="POST" action="contacto.php">
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input name="nombre" required type="text" id="nombre"
                                    class="form-control" placeholder="Ingresa tu nombre">
                            </div>
                            <div class="form-group">
                                <label for="correo">Correo electrónico</label>
                                <input name="correo" required type="email" id="correo"
                                    class="form-control" placeholder="Ingresa tu correo electrónico">
                            </div>
                            <div class="form-group">
                                <label for="mensaje">Mensaje</label>
                                <textarea required placeholder="Escribe tu mensaje"
                                    class="form-control" name="mensaje" id="mensaje"
                                    cols="30" rows="4"></textarea>
                            </div>
                            <div class="form-group mb-0">
                                <button class="btn-success btn" type="submit">
                                    Enviar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <!-- Footer -->
        <footer>
            <div class="container ">
                <hr>
                <div class="row ">
                    <div class="col-12 text-center ">
                        <p>&copy; 2022 Farmacia. Todos los derechos reservados.</p>
                    </div>
                </div>
            </div>
        </footer>
    </body>
    </html>
