
<?php
    require_once ("config/Configurar.php");
    require_once ("helpers/url_helpers.php");
    /*require_once ("lib/Database.php");
    require_once ("lib/Controlador.php");
    require_once ("lib/Core.php");*/

     /* AUTOLOAD - detecte cuales son los archivos que 
    se encuentran de esa carpeta de clase e intanciarlo sin hacerlo manualmente */
    spl_autoload_register(function($nombreClase){
        require_once("lib/".$nombreClase.".php");
    }); //se carga todas las carpetas de lib con solo llamar la funcion
?>