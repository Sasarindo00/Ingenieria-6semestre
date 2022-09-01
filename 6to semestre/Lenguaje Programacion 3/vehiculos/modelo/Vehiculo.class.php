<?php


class Vehiculo {
    
    private $id;
    private $transmision;
    private $modelo;
    private $marca;
    private $anio;
    
    
    public function __construct($id, $transmision, $modelo, $marca, $anio) {
        $this->id = $id;
        $this->transmision = $transmision;
        $this->modelo = $modelo;
        $this->marca = $marca;
        $this->anio = $anio;
    }
    
    public function getId() {
        return $this->id;
    }

    public function getTransmision() {
        return $this->transmision;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function getAnio() {
        return $this->anio;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setTransmision($transmision): void {
        $this->transmision = $transmision;
    }

    public function setModelo($modelo): void {
        $this->modelo = $modelo;
    }

    public function setMarca($marca): void {
        $this->marca = $marca;
    }

    public function setAnio($anio): void {
        $this->anio = $anio;
    }



}


?>