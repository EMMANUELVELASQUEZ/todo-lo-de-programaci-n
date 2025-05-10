<?php 
	
		$a = floatval($_post['a']);
		$b = floatval($_post['b']);
		$c = floatval($_post['c']);
		
if (($a != $b)  && ($a != $c)) {
	echo "El triangulo es escaleno";}

	elseif (($a == $b) && ($a == $c)) {
		echo "el triangulo es equilatero";}

		elseif (($a == $b) && ($a == $c)) {
		echo "el triangulo es isoceles";}
 ?>
