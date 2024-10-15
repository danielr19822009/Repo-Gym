<?php 

// DATOS PARA CONECTARME A LA BASE DE DATOS
$servidorbd = "localhost";
$usuariobd  = "root";
$clavebd    = "";

// NOMBRE DE LA BASE DE DATOS
$basedatos  = "GYM";

// GUARDAMOS LOS DATOS EN LA VARIABLE CONECTAR
$conectarbd = mysqli_connect($servidorbd, $usuariobd, $clavebd) or die("Error en la conexión: " . mysqli_connect_error());

// Seleccionamos la base de datos
mysqli_select_db($conectarbd, $basedatos) or die("Error al seleccionar la base de datos: " . mysqli_error($conectarbd));

// Establecemos el conjunto de caracteres
mysqli_set_charset($conectarbd, "utf8");

?>
