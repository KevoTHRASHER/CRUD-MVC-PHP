<?php require('modulos/head.php'); ?>
<?php require('modulos/nav.php'); ?>
    <br/>
    <?php

    $rutas = new RutasControlador();
    $rutas -> Rutas();

    ?>
    <!--    BOOTSTRAP JavaScript    -->
    <script src="Vista/js/bootstrap.bundle.js"></script>
</body>
</html>
