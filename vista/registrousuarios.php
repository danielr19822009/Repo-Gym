

<!DOCTYPE html>
<html>
<head>
	<title>Registro Usuarios Nuevos</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="..\stilos\estilos.css">
</head>
		<body>

		

			<div class="formregistro">
				<h1>Bienvenido Llena el Formulario</h1>
			</div>

			<div class="cont-formregistro">
				<form action="..\crud\crudusuarios.php" method="POST" class="formregistro">
				
					<label>Tu Nombre</label>
					<input type="Text"/ name="txt-nombre"><br><br>

					<label>Tu Apellido</label>
					<input type="Text"/ name="txt-apellido"><br><br>

					<label>Documento </label>
					<input type="number"/ name="txt-documento"><br><br>

					<label>Tu Dirección</label>
					<input type="Text"/ name="txt-direccion"><br><br>

					<label>Fecha Nacimiento</label>
					<input type="date"/ name="txt-fecha" id="datepicker" placeholder="Año/mes/Dia"><br><br>
					
					<hr>

					<label>Id_Usuario</label>
					<input type="text" name="txt-idusuario" disabled><br><br>

					<label>Id Ejercicio</label>
					<input type="text"/ name="txt-idejercicio" disabled><br><br>

					<button name="btn-guardar" value="guardar">Guardar</button>

				</form>



			</div>

		</body>
</html>