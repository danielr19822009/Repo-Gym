<?php
	require_once("..\conexion\conexion.php");

	if(!isset($_SESSION)){
		session_start();

		header("location ../index.php");
	}

?>
