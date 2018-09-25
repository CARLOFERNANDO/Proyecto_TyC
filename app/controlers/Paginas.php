<?php
    class Paginas extends Controlador{
        
        public function __construct(){
            $this->profesorModelo = $this->modelo('Profesor');
        }
        
        public function buscar(){
            $profesores = $this->profesorModelo->listarProfesores();
            
            $datos = [
                'titulo'=> 'Bienvenidos a Sistema de Matricula',
                'profesores' => $profesores
            ];
                
            $this->vistas('/paginas/profesores_buscar', $datos);
        }

        public function index(){
            
            $datos = [
                'titulo'=> 'Bienvenidos a Sistema de Matricula'
            ];
            
            $this->vistas("paginas/inicio",$datos);
        }
        
        public function agregar(){
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $datos = [
                'nombre' => trim($_POST['nombres']),
                'apeP' => trim($_POST['apellido-paterno']),
                'apeM' => trim($_POST['apellido-materno']),
                'sexo' => trim($_POST['sexo']),
                'edad' => trim($_POST['edad'])
                
            ];
            
                if($this->profesorModelo->agregarProfesor($datos)){
                    redireccionar('paginas');
                }else{
                    die('Algo salio mal');
                }
                             
            }else{
                $datos = [
                  'id' => '',
                    'nombre' => '',
                    'apeP' => '',
                    'apeM' => '',
                    'sexo' => '',
                    'edad' => ''
                ];
                
                $this->vistas('/paginas/profesores_registrar', $datos);
            }
            
        }
        
        public function editar($id){
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $datos = [
                'id' => $id,
                'nombre' => trim($_POST['nombres']),
                'apeP' => trim($_POST['apellido-paterno']),
                'apeM' => trim($_POST['apellido-materno']),
                'sexo' => trim($_POST['sexo']),
                'edad' => trim($_POST['edad'])
                
            ];
            
                if($this->profesorModelo->editarProfesor($datos)){
                    redireccionar('paginas');
                }else{
                    die('Algo salio mal');
                }
                             
            }else{
                //este bloque se carga ni bien se da click en el enlace y hasta que se presiona el boton
                //obtener informacion de profesor desde modelo 
                $profesor = $this->profesorModelo->obtenerProfesorID($id);
                $datos = [
                    'id' => $profesor->idprof,
                    'nombre' => $profesor->nombre,
                    'apeP' => $profesor->apePaterno,
                    'apeM' => $profesor->apeMaterno,
                    'sexo' => $profesor->sexoProf,
                    'edad' => $profesor->edadProf
                ];
                
                $this->vistas('paginas/profesores_modificar', $datos);
            }
        }
        
        public function eliminar($id){
            
            //obtener informacion de profesor desde modelo
                $profesor = $this->profesorModelo->obtenerProfesorID($id);
                
                $datos = [
                    'id' => $profesor->idprof,
                    'nombre' => $profesor->nombre,
                    'apeP' => $profesor->apePaterno,
                    'apeM' => $profesor->apeMaterno,
                    'sexo' => $profesor->sexoProf,
                    'edad' => $profesor->edadProf
                ];
            
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $datos = [
                'id' => $id
            ];
            
                if($this->profesorModelo->eliminarProfesor($id)){
                    redireccionar('paginas');
                }else{
                    die('Algo salio mal');
                }
                             
            }
                
                
                
                $this->vista('/paginas/eliminar', $datos);
            
        }
        
    }

?>