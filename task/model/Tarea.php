<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Tarea
 *
 * @author 2gdaw01
 */
class Tarea {
    //put your code here
    private $table = "proyecto";
    private $conexion;
    
    private $idTarea;
    private $nombre;
    private $fechaVencimiento;
    
    
    function __construct($conexion) {
        $this->conexion = $conexion;
    }
}
