<?php 
require_once("./conexion/conexion.php"); // Corrección de la ruta
session_start();

// CODIGO PARA TRANSFORMAR CARACTERES RAROS EN STRING
$usuario = isset($_REQUEST['txt-usuario']) ? mysqli_real_escape_string($conectarbd, $_REQUEST['txt-usuario']) : ''; // Usar operador ternario para evitar errores
$documento = isset($_REQUEST['txt-documento']) ? mysqli_real_escape_string($conectarbd, $_REQUEST['txt-documento']) : ''; // Usar operador ternario para evitar errores

// Buscar Usuario en base de datos
$queryselectalluser = mysqli_query($conectarbd, "SELECT * FROM usuarios WHERE nombre = '$usuario' AND documento = '$documento'") or die(mysqli_error($conectarbd)); // Consulta simplificada
$selectuser = mysqli_query($conectarbd, "SELECT * FROM usuarios INNER JOIN niveles ON usuarios.documento = niveles.documentousuario WHERE usuarios.documento = '$documento'") or die(mysqli_error($conectarbd)); // Añadida la condición WHERE para optimizar la consulta

if ($fila = mysqli_fetch_array($queryselectalluser)) {
    $msn = "Bienvenido Al Gym: " . $fila['nombre'] . " " . $fila['apellido'] . " ";

    if ($row = mysqli_fetch_array($selectuser)) {
        $msn1 = "Tu Nivel es " . $row['nombrenivel'];
    } else {
        $msn1 = ""; // Inicializar $msn1 si no se encuentra el nivel
    }

    // Redirigir al menú principal con el mensaje
    header("Location: ../vista/menuprincipal.php?mensaje=" . urlencode($msn . $msn1)); // Codificar el mensaje para la URL
    exit; // Asegurarse de detener el script después del redireccionamiento

} else {
    $msn = "Usuario y documento incorrectos. Regístrate por favor.";
    header("Location: /miforce/index1.php?mensaje=" . urlencode($msn)); // Codificar el mensaje para la URL
    exit; // Asegurarse de detener el script después del redireccionamiento
}
?>
