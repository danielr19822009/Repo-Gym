<?php
require_once("../conexion/conexion.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Suponiendo que envías un formulario de inicio de sesión con 'username' y 'password'
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Consulta a la base de datos para verificar el usuario
    $query = "SELECT * FROM usuarios WHERE nombre = ?"; // Cambia 'usuarios' por tu tabla
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        // Verificar la contraseña (usa password_verify si las contraseñas están hasheadas)
        if ($password === $user['password']) {
            // Iniciar la sesión
            session_start();
            $_SESSION['usuario'] = $user['nombre']; // O el ID del usuario, etc.
            header("Location: ../menuprincipal.php");
            exit();
        } else {
            echo "Contraseña incorrecta.";
			header("Location: /index.php");
        }
    } else {
        echo "Usuario no encontrado.";
    }
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Menu</title>
    <link rel="stylesheet" type="text/css" href="/css/estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="bg-dark text-white">

    <div class="container mt-4">
       
            <?php
                $mensaje = $_GET['mensaje'] ?? '';
                if (!empty($mensaje)) {
                    echo '<div class="alert alert-success">
							<a href="#" aria-label="close">&times;</a>
							<strong>'.htmlspecialchars($mensaje).'!</strong>
						</div>';
                }
            ?>

        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Muscle Factory</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="rutinaDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="../imagenes/PNG/32x32/user.png"> Rutina
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="rutinaDropdown">
                            <li><a class="dropdown-item" href="menuprincipal.php?page=pecho"><img src="../imagenes/varias/16x16/Weightlifter_silhouette_16.png"> Pecho</a></li>
                            <li><a class="dropdown-item" href="menuprincipal.php?page=triceps"><img src="../imagenes/varias/16x16/Weightlifter_silhouette_16.png"> Triceps</a></li>
                            <li><a class="dropdown-item" href="#"><img src="../imagenes/varias/16x16/Weightlifter_upper_side_silhouette_16.png"> Biceps</a></li>
                            <li><a class="dropdown-item" href="#"><img src="../imagenes/varias/16x16/Olympic_Weightlifting__16.png"> Espalda</a></li>
                            <li><a class="dropdown-item" href="menuprincipal.php?page=pierna"><img src="../imagenes/varias/16x16/Weightlifter_silhouette_16.png"> Pierna</a></li>
                            <li><a class="dropdown-item" href="#"><img src="../imagenes/varias/16x16/Standing_man_silhouette_lifting_dumbbells_16.png"> Hombros</a></li>
                            <li><a class="dropdown-item" href="#"><img src="../imagenes/varias/16x16/Standing_man_silhouette_lifting_dumbbells_16.png"> Trapecio</a></li>
                            <li><a class="dropdown-item" href="#"><img src="../imagenes/varias/16x16/Standing_man_silhouette_lifting_dumbbells_16.png"> Brazos</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#"><img src="../imagenes/PNG/32x32/paragraph-justify-2.png"> Dietas</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><img src="../imagenes/PNG/32x32/home.png"> Clientes</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><img src="../imagenes/PNG/32x32/home.png"> Productos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><img src="../imagenes/PNG/32x32/home.png"> F.A.Q</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><img src="../imagenes/PNG/32x32/home.png"> Contáctenos</a></li>
                    <li class="nav-item"><a class="nav-link" href="?page=cerrarsession"><img src="../imagenes/varias/32x32/Emergency_exit_32.png"> Salir</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="verpaginas">
            <?php 
                @$page = $_REQUEST["page"];
                switch ($page) {
                    case 'pecho':
                        include_once("pecho/pecho.php");
                        break;
                    case 'triceps':
                        include_once("triceps/triceps.php");
                        break;
                    case 'biceps':
                        include_once("/biceps/biceps.php");
                        break;
                    case 'pierna':
                        include_once("pierna/pierna.php");
                        break;
                    case 'cerrarsession':
                        include_once("../validacion/cerrarsession.php");
                        break;
                }
            ?>
        </div>
    </div>

</body>
</html>
