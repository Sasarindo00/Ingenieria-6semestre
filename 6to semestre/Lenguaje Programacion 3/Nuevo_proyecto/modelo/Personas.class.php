<?php


class Personas {
    
    private $id;
    private $nombre;
    private $apellido;
    private $documento;
    private $edad;
    
    
    public function __construct($id, $nombre, $apellido, $documento, $edad) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->documento = $documento;
        $this->edad = $edad;
    }
    
    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function getDocumento() {
        return $this->documento;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    public function setApellido($apellido): void {
        $this->apellido = $apellido;
    }

    public function setDocumento($documento): void {
        $this->documento = $documento;
    }

    public function setEdad($edad): void {
        $this->edad = $edad;
    }



    
    
}


?>