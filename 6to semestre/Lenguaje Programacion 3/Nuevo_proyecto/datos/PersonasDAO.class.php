<?php

class PersonasDAO implements IDAO {

    private $dbh; // data base handle

    public function __construct() {
        try {
            $dbname = 'lplll_2022';
            $dsn = 'mysql:host=localhost;port=3306;dbname=' . $dbname;   // data source name
            $username = 'root';
            $password = '';
            $this->dbh = new PDO($dsn, $username, $password);
            $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    public function listar( $condicion ) {
        try {
            $stmt = $this->dbh->prepare('SELECT * FROM personas '.$condicion);
            $stmt->execute();
            $linea = $stmt->fetchAll(PDO::FETCH_OBJ);
            foreach ($linea as $key => $value) {
                $lista[$key] = $value;
            }
            return $lista;
        } catch (Exception $ex) {
            echo 'Error en el metodo Listar ' . $ex->getMessage();
        }
    }

    public function insertar($obj) {
        try {

            $nombre = $obj->getNombre();
            $apellido = $obj->getApellido();
            $documento = $obj->getDocumento();
            $edad = $obj->getEdad();
            
            $stmt = $this->dbh->prepare( 
                    "INSERT INTO personas "
                    . "(nombre, apellido, documento, edad) "
                    . "VALUES "
                    . "(:nombre, :apellido, :documento, :edad)"
                    );
                 
            $stmt->bindValue(":nombre", $nombre, PDO::PARAM_STR);
            $stmt->bindValue(":apellido", $apellido, PDO::PARAM_STR);
            $stmt->bindValue(":documento", $documento, PDO::PARAM_STR);
            $stmt->bindValue(":edad", $edad, PDO::PARAM_STR);
            $stmt->execute();
            
            
            
        } catch (PDOException $ex) {
            echo 'Error en el metodo insertar ' . $ex->getMessage();
        }
    }

    public function modificar( $obj ) {
        
        try {
            
            $id = $obj->getId();
            $nombre = $obj->getNombre();
            $apellido = $obj->getApellido();
            $documento = $obj->getDocumento();
            $edad = $obj->getEdad();
            
            $stmt = $this->dbh->prepare(
              "UPDATE personas SET "
                    . "nombre=:nombre, "
                    . "apellido=:apellido, "
                    . "documento=:documento, "
                    . "edad=:edad "
                    . "WHERE id=:id"
            );
            $stmt->bindValue(":nombre", $nombre, PDO::PARAM_STR);
            $stmt->bindValue(":apellido", $apellido, PDO::PARAM_STR);
            $stmt->bindValue(":documento", $documento, PDO::PARAM_STR);
            $stmt->bindValue(":edad", $edad, PDO::PARAM_STR);
            $stmt->bindValue(":id", $id, PDO::PARAM_STR);
            $stmt->execute();
            
            
        } catch (Exception $ex) {
            echo 'Error en el metodo modificar ' . $ex->getMessage();
        }
        
    }

    public function eliminar( $obj ) {
        try {
            
            
            $id = $obj->getId();
            $stmt = $this->dbh->prepare( "DELETE FROM personas WHERE id=:id" );
            $stmt->bindValue(":id", $id, PDO::PARAM_STR);
            $stmt->execute();
            
            
        } catch (Exception $ex) {
            echo 'Error en el metodo eliminar: ' . $ex->getMessage();
        }
    }

}

?>
