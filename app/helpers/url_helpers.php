<?php
//REDIRECCIONAR LAS PAGINAS
    function redireccionar($pagina){
        header("location:".RUTA_URL.$pagina);
    }

?>