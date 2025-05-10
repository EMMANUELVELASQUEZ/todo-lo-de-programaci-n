<?php 
	if (isset($_POST['submit'])) {
		$Base = $_POST['base'];
		$Altura = $_POST['altura'];
		$Area = ($Base * $Altura) / 2 ;
		echo "El Área del triangulo es: " . $Area;
	}
 ?>