<?php

include_once '../Datos/animalesDAO.class.php';

class animalesControl implements IDAO {
    
    private $dao;
    public function __construct() {
        $this->dao = new animalesDAO();
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