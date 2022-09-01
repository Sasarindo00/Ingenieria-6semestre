<?php
interface IDAO {
   
    function listar( $condicion );
    function insertar( $obj );
    function modificar( $obj );
    function eliminar( $obj );
    
}
?>
