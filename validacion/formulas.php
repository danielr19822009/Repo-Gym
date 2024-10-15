<?php  

require_once("..\conexion\conexion.php");

	$accion = $_POST['lagartijas'];	
	
	switch ($accion) {
		case 'cal-lagartijas':
		
			@$ciclos		= $_POST['txt-ciclos'];
			@$repeticiones 	= $_POST['txt-repeticiones'];

			@$resultado     = $ciclos*$repeticiones;

			header("Location: ..\pecho.php?mensaje=$resultado");

		break;
		
		default:
			
			break;
	}

	


?>