<?php

require_once '../Datos/IDAO.php';

class AnimalesDAO implements IDAO {

    private $dbh;

    public function __construct() {

        try {
            $dbname = 'lplll_2022';

            //data source Name
            $dsn = 'mysql:host=localhost;port=3306;dbname=' .$dbname;
            $username = 'root';
            $password = '';
            $this->dbh = new PDO($dsn, $username, $password);
            $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function listar() {
        try{
            $stmt = $this->dbh->prepare('SELECT *FROM animales');
            $stmt->execute();
            $linea = $stmt->fetchAll(PDO::FETCH_OBJ);
            foreach ($linea as $key => $value ){
                $lista[$key] = $value;
            }
            return $lista;
            
        } catch (Exception $ex) {
            echo 'Error en el metodo Listar ' . $ex->getMessage();
        }
    }

    public function insertar() {
        
    }

    public function modificar() {
        
    }

    public function eliminar() {
        
    }

}

?>