<?php
include_once '../Datos/IDAO.php';
include_once '../Datos/PersonasDAO.class.php';

class PersonasControl implements IDAO {
    
    private $dao;
    
    public function __construct() {
        $this->dao= new PersonasDAO();
    }

    public function listar() {
        return $this->dao->listar();
    }

    public function insertar() {
        
    }

    public function modificar() {
        
    }

    public function eliminar() {
        
    }

}

?>