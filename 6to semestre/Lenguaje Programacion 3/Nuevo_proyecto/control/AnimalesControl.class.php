<?php

require '../datos/AnimalesDAO.class.php';

class AnimalesControl implements IDAO {

    private $dao;

    public function __construct() {
        $this->dao = new AnimalesDAO();
    }

    public function listar() {
        return $this->dao->listar() ; 
    }

    public function insertar($obj) {
        
    }

    public function modificar() {
        
    }

    public function eliminar() {
        
    }

}

?>