<?php
$accion=$_REQUEST['campo_accion'];

$cnx=new PDO("mysql:host=localhost;dbname=dracsur","root","");

switch ($accion) {
	case 'eliminar':
		$id_trabajador = $_REQUEST['camp_id_trabajador'];
		$res = $cnx->query("delete from trabajador where id_trabajador=$id_trabajador");
		break;
	
	default;
		break;
}

$cnx=null;
header("Location: listado.php");
?>