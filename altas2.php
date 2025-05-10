<?php
	$con=mysqli_connect('localhost','root','','alumnos4')or die('Problemas en la conexion');
    $sql="INSERT INTO datos_alumnos
VALUES('$_REQUEST[nombre]','$_REQUEST[direccion]','$_REQUEST[telefono]')";

    $resultado=mysqli_query($con,$sql) or die ('Error en el query database');

	mysqli_close($con);

	echo"El alumno fue dado de alta.";
?>

 