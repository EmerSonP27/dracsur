<?php
include_once('conectaHistorial.php');
$consulta= laConsulta();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdumkrjmTGhmTURGAixAAVOaKNc4cvSJMYxiZvuaf2zgca-S6s-s56x5fVR8H4qqhlTXA&usqp=CAU">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historial-Trabajadores</title>
    <style type="text/css">
		body{
			background: linear-gradient(90deg ,rgb(41, 219, 243),rgb(247, 243, 7));
		}
		.contenedor {		
			height: 85%;    
		    width: 85%;
		    margin-left: 8%;
		    margin-right: 8%;
		    }
        .titulo {
	        color: rgb(14, 65, 232);
	        text-align: center;
	        font-family: Arial, Helvetica, sans-serif;
	        padding: 10px 20px;
        }

        img{
            align-items: center;
            position: relative;
            left: 42%;
            border-radius: 20px;
            padding: 12px;
        }
        h2{
            color: rgb(14, 65, 232);
	        text-align: center;
	        font-family: Arial, Helvetica, sans-serif;
            margin:12px;
        }

		table{
			font-family:sans-serif;		
			background-color: #85C1E9;
			border-collapse:collapse;
		}
		th{
            font-family:cursive;
            border: 2px solid white;
			
		}

		table td{
			text-align:center;
			border:2px solid white;
		}	
		.boton-volver{	
			text-align: center;
			padding: 12px;

		}

		a.button{
            background: #6DC6FC ;
            display: inline-block;
            color: rgb(251, 251, 251);
            font-size: 1.25em;
            margin: 20px;
            padding: 10px 0px;
            text-align: center;
            width: 200px;
            text-decoration: none;
            box-shadow: 0px 3px 0px #373c3c ;
            border-radius: 4px;
            position: relative;
            left: 32em;
		}

        a.button.radius{
            border-radius: 50px;
        }

        a.button:hover{
            box-shadow: 0px 0px 0px;
            padding-top: 7px;
        }

		</style>
</head>
<body>
    <header>
        <div class="titulo">
            <h1>HISTORIAL DE ASISTENCIA</h1>
        </div>
        </div>
        <div class="logo">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdumkrjmTGhmTURGAixAAVOaKNc4cvSJMYxiZvuaf2zgca-S6s-s56x5fVR8H4qqhlTXA&usqp=CAU" alt="logo de empresa">
        </div>
    </header>
    <section>
        <div class="Subtema">
            <h2>REGISTRO</h2>
        </div>
        <table border="0" width=90% align="center">
            <tr bgcolor="skyblue">
                <th>ID DE REGISTRO</th>
                <th>ID DEL TRABAJADOR</th>
                <th>TIPO DE REGISTRO</th>
                <th>FECHA Y HORA</th>
            </tr>
            <?php
            while ($persona = $consulta ->fetch_assoc()) {
                # code...
            ?>
            <tr>
                <td><?php echo $persona['id_registro']?></td>
                <td><?php echo $persona['id_trabajador']?></td>
                <td><?php echo $persona['tipo_registro']?></td>
                <td><?php echo $persona['fecha_hora']?></td>
            </tr>
            <?php
            }
            ?>
        </table>

            <a href="http://localhost/Proyecto/html/accesoAdmin.html" class="button">Volver</a>
 
    </section>
</body>
</html>