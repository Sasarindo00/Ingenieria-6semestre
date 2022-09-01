<?php

include_once '../modelo/Vehiculos.class.php';
include_once '../control/VehiculosControl.class.php';

$id = (isset($_GET['id']))? $_GET['id'] : $_POST['id'] ;
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$anio = $_POST['anio'];
$transmision = $_POST['transmision'];

$vehiculoObj = new Vehiculos(
        $id //  $id
        , $marca
        , $modelo
        , $anio
        , $transmision
);
//var_dump($vehiculoObj);die();

$vehiculosControl = new vehiculosControl();

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

