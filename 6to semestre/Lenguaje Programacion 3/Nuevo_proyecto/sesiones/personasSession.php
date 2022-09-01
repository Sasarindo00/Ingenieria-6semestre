<?php

include_once '../modelo/Personas.class.php';
include_once '../control/PersonasControl.class.php';

$id = (isset($_GET['id']))? $_GET['id'] : $_POST['id'] ;
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$documento = $_POST['documento'];
$edad = $_POST['edad'];

$personaObj = new Personas(
        $id //  $id // aslkdfhaslkd fkl
        , $nombre
        , $apellido
        , $documento
        , $edad
);
//var_dump($personaObj);die();

$personasControl = new PersonasControl();

if (!($id > 0))
    $personasControl->insertar($personaObj);
else {

    if (!isset($_GET['del']))
        $personasControl->modificar($personaObj);
    else
        $personasControl->eliminar($personaObj);
}

header('Location: ../vista/personas.php')
?>

