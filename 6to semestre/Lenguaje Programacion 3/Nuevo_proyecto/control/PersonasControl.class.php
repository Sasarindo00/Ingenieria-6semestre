<?php

include_once '../datos/IDAO.php';
include_once '../datos/PersonasDAO.class.php';

class PersonasControl implements IDAO {
    
    private $dao;

    public function __construct() {
        $this->dao = new PersonasDAO();
    }

    public function listar( $condicion ) {
        return $this->dao->listar( $condicion );
    }

    public function insertar($obj) {
        $this->dao->insertar($obj);
    }

    public function modificar( $obj ) {
        $this->dao->modificar($obj);
    }

    public function eliminar( $obj ) {
        $this->dao->eliminar( $obj );
    }

}

?>
