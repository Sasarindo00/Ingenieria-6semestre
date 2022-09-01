<?php

include_once '../modelo/Vehiculo.class.php';
include_once '../control/VehiculoControl.class.php';

$id = (isset($_GET['id']))? $_GET['id'] : $_POST['id'] ;
$transmision = $_POST['transmision'];
$modelo = $_POST['modelo'];
$marca = $_POST['marca'];
$anio = $_POST['anio'];

$vehiculoObj = new Vehiculo(
        $id //  $id // aslkdfhaslkd fkl
        , $transmision
        , $modelo
        , $marca
        , $anio
);
//var_dump($personaObj);die();

$vehiculosControl = new VehiculoControl();

if (!($id > 0))
    $vehiculosControl->insertar($vehiculoObj);
else {

    if (!isset($_GET['del']))
        $vehiculosControl->modificar($vehiculoObj);
    else
        $vehiculosControl->eliminar($vehiculoObj);
}

header('Location: ../vista/vehiculos.php')
?>

