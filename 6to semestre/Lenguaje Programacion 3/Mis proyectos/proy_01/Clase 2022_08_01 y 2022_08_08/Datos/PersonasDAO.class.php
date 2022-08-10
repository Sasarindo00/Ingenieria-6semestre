<?php

class PersonasDAO implements IDAO {
   
    private $dbh; //data base handle
    
    public function __construct() {
        
        try{ 
            
            $dbname = 'lplll_2022';
            $dsn = 'mysql:host=localhost;port=3306;dbname='.$dbname;
            $username = 'root';
            $password = '';
            $this->dbh = new PDO($dsn, $username, $password);
            $this->dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
            
                    
                   
        } catch (Exception $ex) {
            
            echo $ex->getMessage();

        }
        
    }

    public function listar() {
        try{
            $stat = $this->dbh->prepare('SELECT *FROM personas');
            $stat->execute();
            $linea = $stat->fetchAll(PDO::FETCH_OBJ);
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