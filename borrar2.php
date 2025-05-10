	<html>
	<head>
		<title>Bajas</title>
	</head>	
		<body>
	<?php
	$conexion=mysql_connect ("localhost","root","") or die("problemas en la conexion");
	mysql_select_db("alumnos4",$conexion)or die ("Problemas en la seleccion de la base de datos");
	$registros=mysql_query("SELECT nombre FROM datos_alumnos WHERE nombre='$_REQUEST[nombre]'",$conx)or die ("Problemas en el select:".mysql_error());
	if($reg=mysql_fetch_array($registros))
	{
		mysql_query("DELETE FROM datos_alumnos WHERE nombre='$_REQUEST[nombre]'",$con)or die ("Problemas en el select:".mysql_error());
		echo "se efectuo el borrado del alumno con dicho nombre.";
	}
    else
    {
	echo "No existe un alumno con ese nombre.";
    }
    mysql_close($conexion);
?>
</body>
</html>
