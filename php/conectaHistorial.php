<?php
require_once('parametrosHistorial.php');
//conexion de la base de datos
$conexion= new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
$consulta='';

if ($conexion-> connect_errno) {
    echo 'error';
}

function laConsulta(){
    global $conexion, $consulta;
    $sql= 'SELECT * FROM registro';
    return $conexion -> query ($sql);
}
?>