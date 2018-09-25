<?php
    class Profesor{
        
        private $db;
        
        public function __construct(){
            $this->db = new Conexion;
        }
        
        public function listarProfesores(){
            $this->db->query("SELECT * FROM Profesor");
            return $this->db->mostrarRegistros();
        }
        
        public function agregarProfesor($datos){
            $this->db->query('INSERT INTO PROFESOR (NOMBRE, APEPATERNO, APEMATERNO, SEXOPROF, EDADPROF) VALUES (:NOMBRE, :APEP, :APEM, :SEXO, :EDAD)');
            
            //Vincular los valores
            $this->db->bind(':NOMBRE', $datos['nombre']);
            $this->db->bind(':APEP', $datos['apeP']);
            $this->db->bind(':APEM', $datos['apeM']);
            $this->db->bind(':SEXO', $datos['sexo']);
            $this->db->bind(':EDAD', $datos['edad']);
            
            if($this->db->execute()){
                return true;
            }else{
                return false;
            }
        }
        
        public function obtenerProfesorID($id){
            $this->db->query("SELECT * FROM PROFESOR WHERE IDPROF = :ID");
            $this->db->bind(':ID', $id);
            
            $fila = $this->db->registro();
            
            return $fila;
        }
        
        public function editarProfesor($datos){
            $this->db->query("UPDATE PROFESOR SET NOMBRE = :NOMB, APEPATERNO= :AP, APEMATERNO= :AM, SEXOPROF = :SEXO, EDADPROF= :EDAD WHERE IDPROF = :ID");
            
            //Vincular los valores
            $this->db->bind(':ID', $datos['id']);
            $this->db->bind(':NOMB', $datos['nombre']);
            $this->db->bind(':AP', $datos['apeP']);
            $this->db->bind(':AM', $datos['apeM']);
            $this->db->bind(':SEXO', $datos['sexo']);
            $this->db->bind(':EDAD', $datos['edad']);
            
            if($this->db->execute()){
                return true;
            }else{
                return false;
            }
            
        }
        
        public function eliminarProfesor($id){
            $this->db->query("DELETE FROM PROFESOR WHERE IDPROF = :ID");
            
            //Vincular los valores
            $this->db->bind(':ID', $id);      
            
            if($this->db->execute()){
                return true;
            }else{
                return false;
            }
        }
    }
?>