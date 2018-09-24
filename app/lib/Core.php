<?php
    /*Mapear la url ingresada en el navegador
    1-controlador
    2-metodos
    3-parametro
    
    EJEMPLO: http://localhost/tallerCetpro/Articulos/actualizar/5
            este archivo lo que hara es extraernos la url desde 
            Articulos(controlador), actualizar(metodo),5(id del articulo-parametro)
    */

    class Core{
        /* si no hay controladores o metodos o parametros en la url deben 
        cargar estos atributos QUE SON POR DEFECTOS*/
        protected $controladorActual = "Paginas";
        protected $metodoActual = "index";
        protected $parametros = [];
        
        public function __construct(){
            $url=$this->getUrl();
            
            //buscar en el archivo controlers si el controlador existe(si el archivo existe)
            //solo es una concatenacion
           if (file_exists("../app/controlers/".ucwords($url[0]).".php")){
                //si existe sobreescribe el controladorActual por defecto
                $this->controladorActual=ucwords($url[0]);

                //unset indice
                unset($url[0]);
           }
           //requerir el controlador, concatena el nuevo controlador de la url
           require_once ("../app/controlers/".$this->controladorActual.".php");
           //instancia el constructor del controladorActual, ya sea pagina(por defecto) o el que se 
           //pasa por la url
           $this->controladorActual = new $this->controladorActual;
        
           
           /*verificar la segunda parte de la url que es el metodo
           si es que el usuario ah ingresado,sino ha ingresado se queda en index*/
           if(isset($url[1])){
                if(method_exists($this->controladorActual,$url[1])){
                    //verificar el metodo
                    $this->metodoActual=$url[1];
                    unset($url[1]);
                }
           }
           

           /*OBTENER LOS PARAMETROS */
           $this->parametros=$url ? array_values($url) : [];
           //llamar callback con parametros array
           call_user_func_array([$this->controladorActual,$this->metodoActual],$this->parametros);
        
        }
        public function getUrl(){
            //todo lo que se ingrese por la url este metodo lo traera 

            //el indice "url" esta en el archivo .htaccess de la carpeta public
            if(isset($_GET["url"])){ // si es que esta seteada la url
                $url=rtrim($_GET["url"],"/");  // obtener la url eliminando los "/"
                $url=filter_var($url, FILTER_SANITIZE_URL);  //validacion
                $url= explode("/",$url);  
                return $url; // nos devuelve un arreglo -  Array ( [0] => Articulos    [1] => actualizar     [2] => 5 )
            }
        }
    }

?>