<?php
/* Conexión a la base de datos */
$cnx = new PDO("mysql:host=localhost;dbname=dracsur", "root", "");

$usuario = $_POST["usuario"];
$clave = $_POST["clave"];
$sql = $cnx->query("select * from administrador where usuario='$usuario' and clave='$clave'");
$datos = $sql->fetchObject();

if ($datos) {
    echo "{\"respuesta\":\"OK\",\"mensaje\":\"OK\"}";
} else {
    echo "{\"respuesta\":\"ERROR\",\"mensaje\":\"usuario o clave incorrecta\"}";
}
?>