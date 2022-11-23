<?php

$id_trabajador = $_POST['id_trabajador'];
$clave_antigua = $_POST['clave_antigua'];
$nueva_clave = $_POST['nueva_clave'];
$confirmar_nueva_clave = $_POST['confirmar_nueva_clave'];

if (!$id_trabajador || !$clave_antigua || !$nueva_clave || !$confirmar_nueva_clave){   
    exit;
} 

if ($nueva_clave!=$confirmar_nueva_clave){    
    exit;
}

$cnx = new PDO("mysql:host=localhost;dbname=dracsur", "root", "");

// Buscar en la base de datos
$existe = $cnx->query("select * from trabajador where id_trabajador='$id_trabajador' and clave='$clave_antigua'");

$registro = $existe->fetchObject();

if ($registro){
    $actualizar = $cnx->query("update trabajador set clave = '$nueva_clave' where id_trabajador='$id_trabajador'");
    if($actualizar){
        echo "{\"respuesta\":\"OK\",\"mensaje\":\"OK\"}";
    }    
    
} else {
    echo "{\"respuesta\":\"ERROR\",\"mensaje\":\"Trabajador no encontrado\"}";    
}

?>