<?php  
	require_once("..\conexion\conexion.php");

			$nombre			= $_REQUEST['txt-nombre'];
			$documento		= $_REQUEST['txt-documento'];
			$apellido		= $_REQUEST['txt-apellido'];
			$direccion		= $_REQUEST['txt-direccion'];
			$fecha			= $_REQUEST['txt-fecha'];
			$idusuario		= $_REQUEST[''];
			$idejercicio	= $_REQUEST[''];


		$accion = $_REQUEST['btn-guardar'];	


		switch ($accion) {
			case 'guardar':
				$validarusuario = mysql_query("SELECT * FROM usuarios",$conectarbd)or die(mysql_error());

								
				$sqlingresar= mysql_query("INSERT INTO usuarios(nombre,apellido,documento,direccion,fechanacimiento)	 VALUES('".$nombre."','".$apellido."','".$documento."','".$direccion."','".$fecha."')",$conectarbd);
					
				$msn="Se Guardaron Los Datos; Ingrese por favor Con Su Nombre y Documento";
					header("Location: ..\index.php?mensaje=$msn");

			break;
			
			default:
				# code...
				break;
		}










?>