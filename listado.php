<html>
<body>
	<title>Listado</title>
	<?php
	$link=mysql_connect("localhost","root");
	mysql_select_db("alumnos4",$link);
	$result=mysql_query("SELECT * from alumnos4 ORDER BY nombre",$link);
	//comienza un bucle que leera todos los registros existentes
	while($row=mysql_fetch_array($result)) {
		//$row es un array con todos los campos existentes en la tabla
		echo"<hr>";
		echo"Nombre:".$row['nombre']."<br>";
		echo"Apellidos:".$row['direccion']."<br>";
		echo"Direccion:".$row['telefono']."<br>";
        }//fin del bucle de instrucciones
        mysql_free_result($result);//Liberamos los registros
        mysql_close($link);//Cerramos la conexion con la base de datos
        echo"<hr>";
        ?>
</body>
</html>