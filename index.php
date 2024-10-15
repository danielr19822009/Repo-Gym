<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Help Gym</title>
    <link rel="stylesheet" type="text/css" href="stilos\estilos.css">
    <link rel="shortcut icon" href="imagenes\varias\16x16\Weightlifter_upper_side_silhouette_16.png"
        type="image/extensión" />
</head>

<body class="index">

    <div class="cont-inicio">

        <div class="titllogin">
            <h2>For Trinner Gym</h2>
            <hr>
        </div>

        <div class="cont-login">

            <form class="form-login" action="validacion/validarusuario.php" method="POST">

                <div class="cont-usuario">
                    <label>Tu Nombre</label> <br>
                    <input class="txt-usuario" name="txt-usuario" required><br><br>
                </div>

                <div class="cont-documento">
                    <label>Documento</label> <br>
                    <input class="txt-documento" type="password" name="txt-documento" required><br><br>
                </div>

                <div clas="btn-ingresar">
                    <button class="btningresar">Ingresar</button>
                </div>

                <div clas="btn-registrar">
                    <a href="vista\registrousuarios.php">Clic Para Registrarté</a><br>
                    <br>
                </div>

            </form>

        </div>

        <?php 

						@$mensaje = $_GET['mensaje'];

							echo "<script language='JavaScript'>
					 					alert('$mensaje') 
			  					  </script>";

							echo $mensaje;
					 ?>

    </div>


</body>

</html>