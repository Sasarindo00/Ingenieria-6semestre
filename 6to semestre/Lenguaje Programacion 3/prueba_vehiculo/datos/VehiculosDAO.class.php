<?php

class vehiculosDAO implements IDAO {

    private $dbh; // data base handle

    public function __construct() {
        try {
            $dbname = 'lplll_2022';
            $dsn = "mysql:host=localhost;dbname=$dbname";   // data source name ;port=3306
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
            $stmt = $this->dbh->prepare('SELECT * FROM vehiculo '.$condicion);
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

            $marca = $obj->getMarca();
            $modelo = $obj->getModelo();
            $anio = $obj->getAnio();
            $transmision = $obj->getTransmision();
            
            $stmt = $this->dbh->prepare("INSERT INTO vehiculo(marca, modelo, anio, transmision) VALUES(:marca, :modelo, :anio, :transmision)");
            $stmt->bindValue(":marca", $marca, PDO::PARAM_STR);
            $stmt->bindValue(":modelo", $modelo, PDO::PARAM_STR);
            $stmt->bindValue(":anio", $anio, PDO::PARAM_STR);
            $stmt->bindValue(":transmision", $transmision, PDO::PARAM_STR);
            $stmt->execute();

        } catch (PDOException $ex) {
            echo 'Error en el metodo insertar ' . $ex->getMessage();
        }
    }

    public function modificar( $obj ) {
        
        try {
            
            $id = $obj->getId();
            $marca = $obj->getMarca();
            $modelo = $obj->getModelo();
            $anio = $obj->getAnio();
            $transmision = $obj->getTransmision();
            
            $stmt = $this->dbh->prepare("UPDATE vehiculo SET marca=:marca, modelo=:modelo, anio=:anio, transmision=:transmision WHERE id=:id");
            $stmt->bindValue(":marca", $marca, PDO::PARAM_STR);
            $stmt->bindValue(":modelo", $modelo, PDO::PARAM_STR);
            $stmt->bindValue(":anio", $anio, PDO::PARAM_STR);
            $stmt->bindValue(":transmision", $transmision, PDO::PARAM_STR);
            $stmt->bindValue(":id", $id, PDO::PARAM_STR);
            $stmt->execute();
            
            
        } catch (Exception $ex) {
            echo 'Error en el metodo modificar ' . $ex->getMessage();
        }
        
    }

    public function eliminar( $obj ) {
        try {
            
            
            $id = $obj->getId();
            $stmt = $this->dbh->prepare( "DELETE FROM vehiculo WHERE id=:id" );
            $stmt->bindValue(":id", $id, PDO::PARAM_STR);
            $stmt->execute();
            
            
        } catch (Exception $ex) {
            echo 'Error en el metodo eliminar: ' . $ex->getMessage();
        }           
    }

}

?>
