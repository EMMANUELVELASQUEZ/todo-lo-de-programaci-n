<?

//creamos el link de conexion a nuestro servidor

$link=mysql_connect("localhost","root", "12345"); //seleccionamos la base de datos

mysql_select_db("uno",$link);

//ejecutamos la consulta a la base de datos para extraer los registros $rows=mysql_query("select from alumnos ORDER BY nombre");

?> <table border="2" CELLSPACING=1 CELLPADDING=1>

<tr>

<th> NOMBRE </th>

<th> DIRECCION </th>

<th> TELEFONO </th

</tr>

<?

//esta parte es opcional. //aqui solo extraemos el total de registros que nos devolvio nuestra consulta

$totalregistros=mysql_num_rows($rows);

//iniciamos el recorrido de nuestros registros

while($row=mysql_fetch_array($rows)}{

?>

<tr>

<td><? echo $row['nombre']; ?></td> <td><? echo $row['direccion']; ?></td> echo $row['telefono']; ?></td>

<td><? </tr>

<?

//este es el fin de nuestro ciclo while

}
?>

</table

?>