<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Proyecto
 *
 * @author pcwin
 */
class Proyecto {
    //put your code here
    private $table = "proyecto";
    private $conexion;
    
    private $idProyecto;
    private $nombre;
    private $descripcion;
    
    function __construct($conexion) {
        $this->conexion = $conexion;
    }
    
    function getIdProyecto() {
        return $this->idProyecto;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function setIdProyecto($idProyecto) {
        $this->idProyecto = $idProyecto;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }
    
    public function save(){

        /*$consulta = $this->conexion->prepare("INSERT INTO bodegas (direccion, nombre, email, telefono, nombreContacto, fechaFundacion, hasRestaurante, hasHotel)
                                        VALUES (:direccion, :nombre,:email,:telefono, :nombreContacto, :fechaFundacion, :hasRestaurante, :hasHotel)");
        $save = $consulta->execute(array(
            "direccion" => $this->direccion,
            "nombre" => $this->nombre,
            "email" => $this->email,
            "telefono" => $this->telefono,
            "nombreContacto" => $this->nombreContacto,
            "fechaFundacion" => $this->fechaFundacion,
            "hasRestaurante" => $this->hasRestaurante,
            "hasHotel" => $this->hasHotel
        ));
        $this->conexion = null;

        return $save;*/
    }

    
}
