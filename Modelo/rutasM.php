<?php

class Modelo() {
    static public function RutasModelo($rutas) {

        if( $rutas == "login" || $rutas == "registro" || $rutas == "empleados" || $rutas == "salir" ) {

            $pagina = "Vistas/modulos".$rutas."php";

        } else if( $rutas == "index" ) {

            $pagina = "Vistas/modulos/ingreso.php";

        } else {

            $pagina = "Vistas/modulos/ingreso.php";

        }

        return $pagina;

    }

}

?>
