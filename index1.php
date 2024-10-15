<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Trainer Gym</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="imagenes/man1.jpg" type="image/png">
</head>
<body>
    <div class="container">
        <div class="image-container">
            <img src="imagenes/man1.jpg" alt="Gym Image" class="gym-image">
        </div>
        <div class="login-container">
            <div class="title">
                <h2>Trainer Gym</h2>
                <hr>
            </div>
            <form class="form-login" action="validacion/validarusuario.php" method="POST">
                <div class="form-group">
                    <label for="username">Tu Nombre</label>
                    <input type="text" id="username" name="txt-usuario" class="input" required>
                </div>
                <div class="form-group">
                    <label for="password">Documento</label>
                    <input type="password" id="password" name="txt-documento" class="input" required>
                </div>
                <div class="btn-container">
                    <button type="submit" class="btn-ingresar">Ingresar</button>
                </div>
                <div class="register-link">
                    <a href="vista/registrousuarios.php">Clic Para Registrarte</a>
                </div>
            </form>
            <?php 
                @$mensaje = $_GET['mensaje'];
                if ($mensaje) {
                    echo "<script>alert('$mensaje');</script>";
                }
            ?>
        </div>
    </div>
</body>
</html>
