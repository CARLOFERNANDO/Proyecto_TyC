<?php
    class Conexion{
        private $host=DB_HOST;
        private $usuario=DB_USUARIO;
        private $password=DB_PASS;
        private $nombre_base=DB_NOMBRE;

        private $dbh;
        private $stmt;

        public function __construct(){
            $dsn="mysql:host=".$this->host.";dbname=".$this->nombre_base;
            //para optimizar los recursos del servidor
            $opciones=array(PDO::ATTR_PERSISTENT=>true,
                            PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION);
            try{
                $this->dbh=new PDO($dsn,$this->usuario,$this->password,$opciones);
                //$this->dbh->exec("set names utf8");
            }catch(PDOException $e){
                die ("Falla en la conexion: ".$e->getMessage());
            }
        }

        //preparamos la consulta
        public function query($sql){
            $this->stmt=$this->dbh->prepare($sql);
        }
        //vinculamos la consulta bind
        public function bind($parametro,$valor,$tipo =null){
            if(is_null($tipo)){
                switch(true){
                    case is_int($valor):$tipo=PDO::PARAM_INT;break;
                    case is_bool($valor):$tipo=PDO::PARAM_BOOL;break;
                    //case is_float($valor):$tipo=PDO::PARAM_F;break;
                    case is_null($valor):$tipo=PDO::PARAM_NULL;break;
                    default:$tipo=PDO::PARAM_STR;break;
                }
            }
            $this->stmt->bindValue($parametro,$valor,$tipo);
        }
        //ejecuta la consulta de una clase modelo
        public function execute(){
            return $this->stmt->execute();
        }

        //obtener todos los registros de una clase modelo
        public function mostrarRegistros(){
            $this->execute();//exeute de php
            return $this->stmt->fetchAll(PDO::FETCH_OBJ);
        }

        //obtener un unico registro de una clase modelo
        public function registro(){
            $this->execute();//exeute de php
            return $this->stmt->fetch(PDO::FETCH_OBJ);
        }

        //obtener la cantidad de registro de una clase modelo
        public function rowCount(){
            return $this->stmt->rowCount();
        }
    }

?>