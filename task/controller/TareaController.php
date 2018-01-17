<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TareaController
 *
 * @author 2gdaw01
 */
class TareaController {
    //put your code here
            
    private $conectar;
    private $conexion;

    public function __construct() {
		require_once  __DIR__ . "/../core/Conectar.php";
        require_once  __DIR__ . "/../model/Proyecto.php";
        
        $this->conectar=new Conectar();
        $this->conexion=$this->conectar->conexion();

    }
    
    public function run($accion){
        switch($accion)
        { 
            case "alta" :
                $this->crear();
                break;
            case "actualizar" :
                $this->actualizar();
                break;
            case "delete" :
                $this->delete();
                break;
        }
    }
    
 
    public function crear(){
        if(isset($_POST["nombre"])){

            //Creamos un proyecto
            $tarea=new Proyecto($this->conexion);
            $proyecto->setNombre($_POST["nombre"]);
            $proyecto->setDescripcion($_POST["descripcion"]);
            $save=$proyecto->save();
            
        }
        header('Location: index.php?controller=perfil&action=perfilUsuario');
    }
   
    //FUNCION ACTUALIZAR
    public function actualizar(){
        
    }

    //FUNCION DELETE
    public function delete (){
       
    }
    
}
