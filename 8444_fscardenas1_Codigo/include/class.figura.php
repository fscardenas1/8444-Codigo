<?php
	abstract class figura{
		private $tipo;
		private $a; //area
		private $p; //perimetro
		
		public static function get_form(){
			$html = ' 
			<head>
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
			</head>
			<form name="figuras" id="figuras" method="" action="#">
			<table border=0 align="center">
				<tr>
					<th colspan="2" class="fs-title">Seleccione la figura geometria a calcular</th>
				</tr>
				<tr>
					<td>Tipo: </td>
					<td>
					<br><br>
						<select name="tipo" id="fig" onchange="seleccionFig();">
							<option value="sel">Ingrese la figura a calcular</option>
							<option value="cuadrado">Cuadrado</option>
							<option value="rectangulo">Rectángulo</option>
							<option value="triangulo">Triángulo</option>
						</select>
						<p id="texto"></p>
					</td>
				</tr>
				<tr>
					<td>Lado 1:</td>
					<td><input type="text" id="lado_1"  name="lado_1" size="4" disabled></td>
				</tr>
				<tr>
					<td>Lado 2:</td>
					<td><input type="text" id="lado_2"   name="lado_2" size="4" disabled></td>
				</tr>
				<tr>
					<td>Lado 3:</td>
					<td><input type="text" id="lado_3"  name="lado_3" size="4" disabled></td>
				</tr>
				
				<tr>
					<th colspan="2"><br><input class="action-button" type="submit" name="calcular" value="Calcular"></th>
				</tr>
			</table>
			</form>

			<script src="js/funcion.js"></script>';
			return $html;
		}
		
		//METODOS ABSTRACTOS	
		public abstract function GetArea();
	    
	    
	    public abstract function GetPerimetro();
	    
	    
	    public abstract function GetTipo();
	}
?>
