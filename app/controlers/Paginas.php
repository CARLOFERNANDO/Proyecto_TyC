<?php
    class Paginas extends Controlador{
        public function __construct(){
            ;
        }

        public function index(){

            $datos=["titulo"=>"BIENVENIDOS A LA WEB DE MATRICULA CETPRO"                                
                    ];
            $this->vistas("paginas/inicio",$datos);
        }
        
    }

?>