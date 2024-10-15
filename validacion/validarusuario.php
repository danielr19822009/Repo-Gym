<?php 
	require_once("../conexion/conexion.php"); // Corregido el uso de la ruta

	session_start();
	
	// CODIGO PARA TRANSFORMAR CARACTERES RAROS EN STRING
	@$usuario   = mysqli_real_escape_string($conectarbd, $_REQUEST['txt-usuario']); // Añadido $conectarbd como primer argumento
	@$documento = mysqli_real_escape_string($conectarbd, $_REQUEST['txt-documento']); // Añadido $conectarbd como primer argumento

	// Buscar Usuario en base de datos
	$queryselectalluser = mysqli_query($conectarbd, "SELECT * FROM usuarios WHERE nombre = '".$usuario."' AND documento = '".$documento."' ") or die(mysqli_error($conectarbd)); // Reordenada la función
	$selectuser = mysqli_query($conectarbd, "SELECT * FROM usuarios INNER JOIN niveles ON usuarios.documento = niveles.documentousuario") or die(mysqli_error($conectarbd)); // Reordenada la función

	if($fila = mysqli_fetch_array($queryselectalluser)){
		$msn = "Bienvenido Al Gym: " . $fila['nombre'] . " " . $fila['apellido'] . " ";

		if($row = mysqli_fetch_array($selectuser)){
			$msn1 = "Tu Nivel es " . $row['nombrenivel'];
		} else {
			$msn1 = ""; // Inicializar $msn1 si no se encuentra el nivel
		}

		header("Location: ../vista/menuprincipal.php?mensaje=" . urlencode($msn . $msn1)); // Codificar el mensaje para la URL
		exit; // Asegurarse de detener el script después del redireccionamiento

	} else {
		$msn = "Usuario y contraseña incorrectos. Regístrate por favor.";
		header("Location: miforce/index.php?mensaje=" . urlencode($msn)); // Codificar el mensaje para la URL
		exit; // Asegurarse de detener el script después del redireccionamiento
	}

?>
