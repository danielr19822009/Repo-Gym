<!DOCTYPE html>
<html>
<head>
	<title>ejercicios-pecho</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="..\stilos\estilos.css">
</head>
<body>

	<h1>Ejercicios Para Pecho</h1>

	<div class="cont-pecho">

			<div class="cont-lagartijas">

				<h2>&nbsp;&nbsp;&nbsp;<img src="..\imagenes\varias\64x64\Pushups_Man_64.png">&nbsp;&nbsp;&nbsp;Lagartijas</h2>	
					<p class="lagartijas">
						Las lagartijas son ejercicios de flexión que permiten trabajar y fortalercer los músculos del tren superior,
						especialmente pectorales, hombros, trícpes, y deltoides, entre otros músculos,
						como los abdominales y la espalda. La variedad de ejercicios de lagartijas es lo
						suficientemente grande como para fortalecer ciertos músculos sobre otros y contemplar los diferentes niveles 
						de dificultad que presentan los ejercicios. Veamos a continuación diferentes tipos de lagartijas y ejemplos de flexiones
						de brazos que nos presentarán distintos desafíos a la hora de hacer ejercicio.
					</p>


						<!-- action="validacion/formulas.php" -->
					<form class="formlagartijas"  method="POST">

							<h3>Cantidad de Calorias Quemadas</h3>

							<label>Ciclos</label><br>
							<input type="number" name="txt-ciclos"/><br><br>

							<label>Repeticiones</label><br>
							<input type="number" name="txt-repeticiones"/><br><br>

							<button name="lagartijas" value="cal-lagartijas">Calcular</button><br><br>

							<?php 
								@$ciclos		= $_POST['txt-ciclos'];
								@$repeticiones 	= $_POST['txt-repeticiones'];
								@$resultado1     = $ciclos*$repeticiones; 

								echo $resultado1 . " Calorias Quemadas";
							?>


					</form>	

					<?php  

						@$contador =$resultado1+$resultado2+$resultado3;
					?>
			</div>

		

			<div class="pecho1">
			
				<h2>&nbsp;&nbsp;&nbsp;<img src="..\imagenes\varias\64x64\Paralympic_weightlifting_lying_silhouette_64.png">&nbsp;&nbsp;&nbsp;Press De Banco Plano</h2>

				<p class="pressbarra">
					<h4>POSICIÓN:</h4> tumbate sobre un banco plano. Los glúteos deben estar sobre el banco y los pies en el suelo. Coge la barra con las manos en pronación (movimiento del antebrazo que hace girar la mano de fuera a dentro presentando el dorso de ella). La separación entre las manos debe ser un poco mayor a la altura de los hombros.

					<h4>EJERCICIO:</h4> inspira y baja la barra hasta el pecho controlando en todo momento la carga. En segundo lugar eleva la barra hacia arriba estirando los brazos. Espira al final del movimiento.

					<h4>MÚSCULOS TRABAJADOS:</h4> trabaja el músculo pectoral mayor en conjunto. También el músculo pectoral menor, los tríceps, el deltoides anterior, los serratos y el coracobraquial.
				</p>

				<form class="formpressbarra"  method="POST">

								<h3>Cantidad de Calorias Quemadas</h3>

								<label>Ciclos</label><br>
								<input type="number" name="txt-ciclospecho1"/><br><br>

								<label>Repeticiones</label><br>
								<input type="number" name="txt-repeticionespecho1"/><br><br>

								<button name="pressbarra" value="cal-pressbarra">Calcular</button><br><br>

								<?php 
									@$ciclospecho1		= $_POST['txt-ciclospecho1'];
									@$repeticionespecho1 	= $_POST['txt-repeticionespecho1'];
									@$resultado2    = $ciclospecho1*$repeticionespecho1; 

									echo $resultado2 . " Calorias Quemadas";
								?>


				</form>

			</div>

	</div>

</body>
</html>