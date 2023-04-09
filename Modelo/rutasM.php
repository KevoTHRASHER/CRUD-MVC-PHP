<?php

class Modelo {

    public static function RutasModelo($rutas) {

        if( $rutas == "login" || $rutas == "registro" || $rutas == "empleados" || $rutas == "salir" ) {

            $pagina = "Vista/modulos/".$rutas."php";

        } else if( $rutas == "index" ) {

            $pagina = "Vista/modulos/login.php";

        } else {

            $pagina = "Vista/modulos/login.php";

        }

        return $pagina;

    }

}

?>
