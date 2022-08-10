<?php


class Personas {
     
    private $id;
    private $Nombre;
    private $apellido;
    private $Documento;
    private $Edad;
    
    
    public function __construct($id, $Nombre, $apellido, $Documento, $Edad) {
        $this->id = $id;
        $this->Nombre = $Nombre;
        $this->apellido = $apellido;
        $this->Documento = $Documento;
        $this->Edad = $Edad;
    }
    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->Nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function getDocumento() {
        return $this->Documento;
    }

    public function getEdad() {
        return $this->Edad;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setNombre($Nombre): void {
        $this->Nombre = $Nombre;
    }

    public function setApellido($apellido): void {
        $this->apellido = $apellido;
    }

    public function setDocumento($Documento): void {
        $this->Documento = $Documento;
    }

    public function setEdad($Edad): void {
        $this->Edad = $Edad;
    }



}
?>