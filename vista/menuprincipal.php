<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Menu</title>
	<link rel="stylesheet" type="text/css" href="..\stilos\estilos.css">


		<link rel="stylesheet" href="..\plugins\sliderTabs-1.1\styles/jquery.sliderTabs.min.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="..\plugins\sliderTabs-1.1\jquery.sliderTabs.min.js"></script>


		 <meta name="viewport" content="width=device-width, initial-scale=1">
		  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

		  

</head>
	<body>

			<table class="cont-bar-bienvenido">
				<tr>
					<td class="sessionnombre">
						<?php

							@$mensaje = $_GET['mensaje'];
							echo '<img src="..\imagenes\PNG\32x32\bullhorn-2.png">';
							echo $mensaje;
						 ?>
					</td>

					<td class="nivel">
						<?php
							@$mensaje1 = $_GET['mensaje1'];
							echo $mensaje1;
						 ?>	
					</td>
				</tr>
			</table>
			
			<div class="cont-menuprincipal">

				<nav class="menu">

					<ul class="submenu">
						<li><a href="menuprincipal.php"><img src="..\imagenes\PNG\32x32\user.png">Rutina</a>
							<ul>
								<li><a href="menuprincipal.php?page=pecho"><img src="..\imagenes\varias\16x16\Weightlifter_silhouette_16.png">Pecho</a></li>
								<li><a href="menuprincipal.php?page=triceps"><img src="..\imagenes\varias\16x16\Weightlifter_silhouette_16.png">Triceps</a></li>
								<li><a href=""><img src="..\imagenes\varias\16x16\Weightlifter_upper_side_silhouette_16.png">Biceps</a></li>
								<li><a href=""><img src="..\imagenes\varias\16x16\Olympic_Weightlifting__16.png">Espalda</a></li>
								<li><a href="menuprincipal.php?page=pierna"><img src="..\imagenes\varias\16x16\Weightlifter_silhouette_16.png">Pierna</a></li>
								<li><a href=""><img src="..\imagenes\varias\16x16\Standing_man_silhouette_lifting_dumbbells_16.png">Hombros</a></li>
								<li><a href=""><img src="..\imagenes\varias\16x16\Standing_man_silhouette_lifting_dumbbells_16.png">Trapecio</a></li>
								<li><a href=""><img src="..\imagenes\varias\16x16\Standing_man_silhouette_lifting_dumbbells_16.png">Brazos</a></li>
							</ul>
						</li>
						<li><a href=""><img src="..\imagenes\PNG\32x32\paragraph-justify-2.png">Dietas</a></li>
						<li><a href=""><img src="..\imagenes\PNG\32x32\home.png">Clients</a></li>
						<li><a href=""><img src="..\imagenes\PNG\32x32\home.png">Products</a></li>
						<li><a href=""><img src="..\imagenes\PNG\32x32\home.png">F.A.Q</a></li>
						<li><a href=""><img src="..\imagenes\PNG\32x32\home.png">Contactenos</a></li>
						<li><a href="?page=cerrarsession"><img src="..\imagenes\varias\32x32\Emergency_exit_32.png">Salir</a></li>

					</ul>
				</nav>
				
			</div>



		

			<!-- VER PAGINAS-->
			<div class="verpaginas">
				<?php 
					@$page = $_REQUEST["page"];
					switch ($page){

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
 							include_once("/../validacion/cerrarsession.php");
 						break;
 						
 					}

				 ?>
			</div>

		</div>

	

	</body>


</html>