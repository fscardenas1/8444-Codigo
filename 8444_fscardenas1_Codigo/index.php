<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Ejercicio Autonomo</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<script src="js/funcion.js"></script>
	
</head>
<body style="background-color:#C0C0C0;">
	<center>
	<img src="img/logo.png" width="200px" height="100px">
    </br></br>
	<h1>Aplicación de Tecnologías WEB</h1>
	<h1>Tercer Parcial</h1>
	<h1>Sebastian Cardenas</h1>
	<br>
	<hr>

	<?php
		include("include/class.figura.php");
		include("include/Interface.formulas.php");
		include("figuras/class.cuadrado.php");
		include("figuras/class.rectangulo.php");
		include("figuras/class.triangulo.php");

		
		
		$objCuadrado = new cuadrado();
		$objRectangulo = new rectangulo();
		$objTriangulo = new triangulo();
			
		echo figura::get_form();
		
		
	?>

	</center>
</body>

</html>
