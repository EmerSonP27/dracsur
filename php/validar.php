<?php 

$id = $_POST['id'];
$clave = $_POST['clave'];

/* Query a la base de datos y verificar si existe el id y clave*/
$cnx = new PDO("mysql:host=localhost;dbname=dracsur","root","");
$query_trabajador = $cnx->query("select id_trabajador,nombre from trabajador where id_trabajador='$id' and clave='$clave'");

/* Si tiene datos*/
if (!$query_trabajador) {
    
    exit;
}
$trabajador=$query_trabajador->fetch();

/* Verificar si ya grabó antes asistencia, no se debe repetir*/
/* select a la tabla de registro de asistencia para ver si el trabajador ya grabo asistencia, tipo*/
$query_registro = $cnx->query("select id_registro,id_trabajador,tipo_registro,fecha_hora from registro where date(fecha_hora)=date(now()) and id_trabajador='$id'");

/* Si ya grabó asistencia del mismo tipo: tipo_registro:
        devolver la hora y la fecha de la marcación
   Sino:
        grabar en la base de datos y devolver la fecha/hora grabada
*/
$array;
if ($query_registro->rowCount()>0){ /*Ya existe, juntar las dos variables en un array*/
    $registro = $query_registro->fetch();
    $array = array('trabajador' => $trabajador, 'registro' => $registro);
}else{ /*Si no existe, registrar la marcación y devolver el resultado*/
    $query_insert = $cnx->query("insert into registro(id_trabajador,tipo_registro,fecha_hora) values('$id','E',now())");
    
    $query_registro2 = $cnx->query("select id_registro,id_trabajador,tipo_registro,fecha_hora from registro where date(fecha_hora)=date(now()) and id_trabajador='$id'");
    
    $registro2 = $query_registro2->fetch();

    $array = array('trabajador' => $trabajador, 'registro' => $registro2);

    $query_registro2->closeCursor();
    unset($query_registro2);
    unset($registro2);
}

//Codificar como objeto json
$data=json_encode($array);

//Poner la cabecera del resultado a tipo json
header('Content-Type: application/json; charset=utf-8');

//devolver en la petición el json generado
echo json_encode($data);

$query_trabajador->closeCursor();
$query_registro->closeCursor();

unset($trabajador);
unset($registro);

unset($query_trabajador);
unset($query_registro);

unset($query_insert);
unset($cnx); 
?>