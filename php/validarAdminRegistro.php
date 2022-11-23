<?php
    $conexion=mysqli_connect('localhost','root','','dracsur');
    if (empty($_POST["id_trabajador"]) or empty($_POST["clave"]) or empty($_POST["nombre"]) or empty($_POST["dni"])){
        exit;
        /* echo '<div class="alerta">los campos no esta relleñados</div>'; */
    } else {
        $id_trabajador=$_POST["id_trabajador"];
        $clave=$_POST["clave"];
        $nombre=$_POST["nombre"];
        $dni=$_POST["dni"];
        $sql=$conexion->query("insert into trabajador (id_trabajador,clave,nombre,dni) values('$id_trabajador','$clave','$nombre','$dni')");
        if ($sql==1) {
            echo "{\"respuesta\":\"OK\",\"mensaje\":\"OK\"}";
            /* echo '<div class="success">usuario registrado exitosamente</div>'; */
        }else{
            echo "{\"respuesta\":\"ERROR\",\"mensaje\":\"Error al registrar\"}";
            /* echo '<div class="alerta">error al registrar</div>'; */
        }
    }
?>