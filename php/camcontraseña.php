<?php
if(isset($_POST['editar'])){
    require "conexion.php";

    $passActual = $mysqli->real_escape_string($_POST['passActual']);
    $pass1 = $mysqli->real_escape_string($_POST['pass1']);
    $pass2 = $mysqli->real_escape_string($_POST['pass2']);

    $passActual = md5($passActual);
    $pass1 = md5($pass1);
    $pass2 = md5($pass2);

    $sqlA = $mysqli->query("SELECT password FROM users WHERE id = '".$_SESSION['id']."'");
    $rowA = $sqlA->fetch_array();
}




?>