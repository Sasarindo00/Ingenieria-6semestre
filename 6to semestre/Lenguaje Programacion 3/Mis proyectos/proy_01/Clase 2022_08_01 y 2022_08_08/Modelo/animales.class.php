<?php


class animales {
    
    private $id;
    private $Nombre;
    private $Duenio;
    private $Edad;
  
    
    public function __construct($id, $Nombre, $Duenio, $Edad) {
        $this->id = $id;
        $this->Nombre = $Nombre;
        $this->Duenio = $Duenio;
        $this->Edad = $Edad;
        
    }
    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->Nombre;
    }

    public function getDuenio() {
        return $this->Duenio;
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

    public function setDuenio($Duenio): void {
        $this->Duenio = $Duenio;
    }

    public function setEdad($Edad): void {
        $this->Edad = $Edad;
    }



}
?>