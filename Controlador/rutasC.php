<?php

class rutasControlador {

    public function plantillaVistas() {
        include('Vista/plantilla.php');
    }

    public function Rutas() {
        if(isset($_GET["ruta"])) {
            $rutas = $_GET["ruta"];
        } else {
            $rutas = "index";
        }

        $respuesta = Modelo::RutasModelo($rutas);

        include $respuesta;
    }
}

?>
