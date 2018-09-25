<?php
    
    /**
     * EL CONTROLADORACTUAL POR DEFECTO SI NO EXISTE UN CONTROLADOR PASADO POR URL ES PAGINAS
     * EL METODOACTUAL POR DEFECTO SI NO EXISTE UN METODO PASADO POR URL ES INDEX
     */
    
    class C_Modulo extends Controlador{
        function __construct(){
            $this->moduloModelo=$this->modelo("Modulo");
        }

        function index(){
            $lsmodulos=$this->moduloModelo->obtenerModulos();
            //$datos=["titulo"=>"CONTENIDO DE UNA PAGINA EN ESPECIFICO"                                
            //        ];
            $datos=["modulos"=>$lsmodulos];
            $this->vistas("paginas/modulos_mostrar",$datos); //FALTA LA PAGINA PARA MOSTRAR LOS MODULOS Y EL INGRESADO
        }

        function agregar(){
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                $datos= [
                    "n_mod"=> trim($_POST["nombre"]),
                    "durac_mod"=> trim($_POST["duracion"])
                ];
                //se ejecuta el agregado y t direcciona a las paginas
                if($this->moduloModelo->agregarModulos($datos)){
                    redireccionar("C_Modulo/agregar"); 
                    /**
                     * Al principio es paginas , pero se necesita direccionar asi mismo para que
                     * ingrese al index y lo direccione a vista
                     */
                }else{
                    die ("ALGO ANDA MAL");
                }
            }else{ // por get y los datos seran vaciois
                $datos = [
                    "n_mod"=> " ",
                    "durac_mod"=> " "
                ];
                //cambiamos paginas/agregar
                $this->vistas("paginas/modulos",$datos);
            }
        }


    }



?>