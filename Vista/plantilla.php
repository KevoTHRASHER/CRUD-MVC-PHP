<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Kevo.THRASHER">
    <meta name="description" content="CRUD Modelo Vista Controlador de Registro de empleados">
    <meta name="keywords" content="CRUD, MVC, HTML, CSS, PHP, Bootstrap">
    <title>CRUD MVC</title>
    <!--    BOOTSTRAP CSS    -->
    <link rel="stylesheet" href="Vista/css/bootstrap.min.css" type="text/css" media="all">
    <!--    BOOTSTRAP ICONS     -->
    <link rel="stylesheet" href="Vista/css/bootstrap-icons/bootstrap-icons.css" type="text/css" media="all">
    <!--    SHORTCUT ICON   -->
    <link rel="shortcut icon" href="Vista/css/bootstrap-icons/card-checklist.svg" type="image/x-icon" media="all">
    <!--    CSS STYLE   -->
    <link rel="stylesheet" href="Vista/css/style.css" type="text/css" media="all">
</head>
<body>
    <nav class="navbar navbar-expand sticky-top">
        <div class="container-fluid">
            <div class="container">
                <ul class="navbar-nav nav-text justify-content-evenly">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.html">Ingresar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="registrar.html">Registrar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="empleados.html">Empleados</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="salir.html">Salir</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br/>
    <div class="container-sm justify-content-center align-items-center text-center">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h1 class="fw-bold">INGRESAR</h1>
                <form class="mb-3" action="" method="POST">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="nombreUsuarioLogin" placeholder="Usuario">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" id="inputPasswordLogin" placeholder="Contraseña">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-lg btn-Login" name="botonLogin">Iniciar Sesión</button>
                    </div>
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
    <!--    BOOTSTRAP JavaScript    -->
    <script src="Vista/js/bootstrap.bundle.js"></script>
</body>
</html>
