<?php require('modulos/head.php'); ?>
<?php require('modulos/nav.php'); ?>
    <br/>
<?php

$rutas = new RutasControlador();
$rutas -> Rutas();

?>
    <br/>
<?php require('modulos/footer-JS.php'); ?>
