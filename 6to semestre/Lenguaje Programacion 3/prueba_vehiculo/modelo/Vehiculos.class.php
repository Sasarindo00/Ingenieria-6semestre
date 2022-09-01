<?php


class Vehiculos {
    
    private $id;
    private $marca;
    private $modelo;
    private $anio;
    private $transmision;
    
    public function __construct($id, $marca, $modelo, $anio, $transmision) {
        $this->id = $id;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->anio = $anio;
        $this->chapa = $transmision;
    }
    
    
    public function getId() {
        return $this->id;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function getAnio() {
        return $this->anio;
    }

    public function getTransmision() {
        return $this->transmision;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setMarca($marca): void {
        $this->marca = $marca;
    }

    public function setModelo($modelo): void {
        $this->modelo = $modelo;
    }

    public function setAnio($anio): void {
        $this->anio = $anio;
    }

    public function setTransmision($transmision): void {
        $this->transmision = $transmision;
    }
 

}

?>