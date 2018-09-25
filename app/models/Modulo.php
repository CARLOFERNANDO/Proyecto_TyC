<?php
    class Modulo{
        private $bd;

        function __construct(){
            $this->$bd=new Conexion();
        }
        function agregarModulos($datos){
            // Modulo(_,_,_,_,_) son todos o solo unos cuantos?
            $this->bd->query("INSERT INTO Modulo VALUES (:v_nom_mod,:v_op_ocu_mod,:v_fech_in,:v_fech_fi,:v_durac)");

            //vincular valores
            $this->bd->bind(":v_nom_mod",$datos["n_mod"]); // estos indices son iguales al 
            $this->bd->bind(":v_op_ocu_mod",$datos["op_ocup_mod"]);//definido en el archivo pagina
            $this->bd->bind(":v_fech_in",$datos["fech_ini_mod"]);
            $this->bd->bind(":v_fech_fi",$datos["fech_fin_mod"]);
            $this->bd->bind(":v_durac",$datos["durac_mod"]);
            if($this->bd->execute()){
                return true;
            }else{
                return false;
            }
        }

        function mostrarModulos(){
            $this->bd->query("SELECT * FROM Modulo");
            $resultados=$this->bd->mostrarRegistros();
            return $resultados;
        }
    }



?>