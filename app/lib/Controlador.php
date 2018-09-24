<?php
    /* CLASE DEL CONTROLADOR PRINCIPAL
    - SE ENCARGA DE CARGAR LOS MODELOS Y LAS VISTAS */
    class Controlador{

        //cargar modelo
        public function modelo($modelo){
            //busca
            require_once ("../app/models/".$modelo.".php");
            
            //instanciar modelo y lo retorna
            return new $modelo();
        }

        
        //cargar vista
        public function vistas($vistas,$datos=[]){
            //chequear si la vista existe
            if(file_exists("../app/views/".$vistas.".php")){
                require_once ("../app/views/".$vistas.".php");
            }else{
                //si el archivo de la vsta no existe
                die("La vista no existe");
            }
        }
    }

    //NOTA IMPORTANTE NO OLVIDARSE DEL .php 



?>