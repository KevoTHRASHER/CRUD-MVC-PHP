<?php require('modulos/head.php'); ?>
<?php require('modulos/nav.php'); ?>
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
