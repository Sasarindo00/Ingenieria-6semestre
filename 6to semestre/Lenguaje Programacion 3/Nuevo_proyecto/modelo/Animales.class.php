<?php
class Animales {
    
    private $id;
    private $nombre;
    private $duenio;
    private $edad;
    
    public function __construct($id, $nombre, $duenio, $edad) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->duenio = $duenio;
        $this->edad = $edad;
    }

    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getDuenio() {
        return $this->duenio;
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

    public function setDuenio($duenio): void {
        $this->duenio = $duenio;
    }

    public function setEdad($edad): void {
        $this->edad = $edad;
    }


    
}
?>