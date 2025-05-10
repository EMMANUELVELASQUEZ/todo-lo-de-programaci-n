	<html>
	<head>
		<body>
	<?php
	$conexion=mysql_connect("localhost","root","") or die("Problemas en la conexion");

	mysql_select_db("datos_alumnos",$conexion)or die("Problemas en la seleccion de la base de datos");

	$registros=mysql_query("select nombre,direccion,telefono from alumnos4 where nombre='$_REQUEST[nombre]'",$conexion) or die ("Problemas en el select:".mysql_error());
	if($reg=mysql_fetch_array($registros))
	{
		echo "nombre:".$reg['nombre']."<br>";
		echo "direccion:".$reg['direccion']."<br>";
		echo "telefono".$reg['telefono']."<br>";
	}
	else
	{
		echo"No existen un alumno con ese nombre.";
	}
	mysql_close($conexion);
	?>
</body>
</html>
