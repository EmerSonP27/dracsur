<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon"
		href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdumkrjmTGhmTURGAixAAVOaKNc4cvSJMYxiZvuaf2zgca-S6s-s56x5fVR8H4qqhlTXA&usqp=CAU">
	<title>Listado-Dracsur</title>

	<style type="text/css">
		body {
			background: linear-gradient(90deg, rgb(41, 219, 243), rgb(247, 243, 7));
		}

		.contenedor {
			height: 85%;
			width: 85%;
			margin-left: 8%;
			margin-right: 8%;
		}

		.encabezado {
			height: 60px;
			background-color: #3486C5;
		}

		.agregar {
			float: right;
			padding: 10px 8px;
			background-color: #36BA4F;
			border-radius: 10px;
		}

		.buscar {
			width: 100%;
			height: 50px;
			margin-top: 20px;
			margin-right: 10px;
		}

		h1 {
			padding: 10px;
			text-indent: 4em;
		}

		table {
			font-family: sans-serif;
			background-color: #85C1E9;
			border-collapse: collapse;
		}

		th {
			font-family: cursive;
			border: 2px solid white;

		}

		table td {
			text-align: center;
			border: 2px solid white;
		}

		.ocultar {
			background: rgba(0, 0, 0, .3);
			position: fixed;
			top: 0;
			bottom: 0;
			left: 0;
			right: 0;
			display: flex;
			align-items: center;
			justify-content: center;
			visibility: hidden;
		}

		.ocultar.active {
			visibility: visible;
		}

		.aparecer {
			background: #F8F8F8;
			box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.3);
			border-radius: 3px;
			font-family: 'Montserrat', sans-serif;
			padding: 20px;
			text-align: center;
			width: 300px;
		}

		.aparecer .btn-cerrar-aparecer {
			font-size: 16px;
			line-height: 16px;
			display: block;
			text-align: right;
			color: #BBBBBB;
		}

		.aparecer h3 {
			font-size: 30px;
			font-weight: 600;
			margin-top: 8px;
		}

		.aparecer h4 {
			font-size: 20px;
			font-weight: 500;
			margin-bottom: 8px;
		}

		input#boton-uno {
			font-size: 20px;

		}

		input.btn-submit {
			background-color: #36BA4F;
			border: none;
			font-family: sans-serif;
			font-size: 24px;
			border-radius: 3px;
		}

		.aparecer form .btn-submit {
			padding: 0px 20px;
			height: 30px;
			line-height: 30px;
			border: none;
			color: #fff;
			background: #5E7DE3;
			border-radius: 3px;
			font-family: 'Montserrat', sans-serif;
			font-size: 16px;
			cursor: pointer;
		}

		.boton-volver {
			text-align: center;
			padding: 12px;
		}

		a.button {
			background: #6DC6FC;
			display: inline-block;
			color: rgb(251, 251, 251);
			font-size: 1.25em;
			margin: 20px;
			padding: 10px 0px;
			text-align: center;
			width: 200px;
			text-decoration: none;
			box-shadow: 0px 3px 0px #373c3c;
			border-radius: 4px;
		}

		a.button.radius {
			border-radius: 50px;
		}

		a.button:hover {
			box-shadow: 0px 0px 0px;
			padding-top: 7px;
		}

		.cambiarClave {
			float: left;
			padding: 10px 8px;
			background-color: #36BA4F;
			border-radius: 10px;
		}

		.cambiarClave a {
			text-decoration: none;
		}

		a.cambiarClave {
			text-decoration: none;

			/*background-color:#36BA4F;
			border:none;
			font-family:sans-serif;
			font-size: 34px;
			border-radius:3px;
			text-decoration:none;
			background: #6DC6FC ;
            display: inline-block;
            color: rgb(251, 251, 251);
            font-size: 1em;
            margin: 20px;
            padding: 30px 0px;
			
			position: relative;
			float: left;
            text-align: center;
            width: 200px;
            text-decoration: none;
            box-shadow: 0px 3px 0px #373c3c ;
            border-radius: 4px;
			top: 23px;*/
		}
	</style>

</head>
<script>
	function ConfirmDelete() {
		var respuesta = confirm("¿Estás seguro que quieres eliminar este Trabajador?");
		if (respuesta == true) {
			return true;
		} else {
			return false;
		}
	}
</script>

<body>
	<div class="contenedor">
		<header class="encabezado">
			<h1>LISTA DE TRABAJADORES</h1>
			<div class="cambiarClave"><a href="../html/cambiarClave.html" class="cambiarClave">Cambiar clave de
					trabajador</a></div>
			<br>
		</header>

		<section class="buscar">
			<div style="float: right;">
				<form action="listado.php" method="get">
					<input id="boton-uno" type="text" placeholder="Ingrese nombre del trabajador" name="campo_buscar">
					<input type="submit" class="btn-submit" value="Buscar">

				</form>
			</div>
		</section>

		<table border="0" width=90% align="center">
			<tr bgcolor="skyblue">
			</tr>

			<tr>
				<th>ID</th>
				<th>Clave</th>
				<th>Nombre</th>
				<th></th>
			</tr>

			<?php

        $cnx = new PDO("mysql:host=localhost;dbname=dracsur", "root", "");

        /* Preguntar si el parámetro campo_buscar existe */
        $buscar = isset($_REQUEST['campo_buscar']) ? $_REQUEST['campo_buscar'] : "";
        if ($buscar == "") {
	        $res = $cnx->query("select id_trabajador, clave, nombre from trabajador;");
        } else {
	        $res = $cnx->query("select * from trabajador where nombre like '%$buscar%'");
        }

        foreach ($res as $row) {
        ?>
			<tr>
				<td align="center">
					<?php echo $row[0]; ?>
				</td>
				<td align="center">
					<?php echo $row[1]; ?>
				</td>
				<td align="center">
					<?php echo $row[2]; ?>
				</td>

				<td><a href="validarListado.php?campo_accion=eliminar&camp_id_trabajador=<?php echo $row[0]; ?>"><img onclick="return ConfirmDelete()" src="http://localhost/Proyecto/img/eliminar.jpg" width="30" height="30" position="relative"></a></td>
			</tr>
		<?php
        }
        ?>
		</table>
	</div>

	<a href="http://localhost/Proyecto/html/accesoAdmin.html" class="button">volver</a>

</body>

</html>