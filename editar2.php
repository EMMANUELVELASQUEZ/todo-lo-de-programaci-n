<HTML>
	<title>Editar</title>
	<FORM ACTION=editar2.php METHOD=post>
		DAME EL NOMBRE A EDITAR:<INPUT TYPE=text NAME=NOMBRE><BR>
		<INPUT TYPE=submit NAME=OK VALUE="BUSCAR"><BR>
	</FORM>
</HTML>
    <?php

    if ($OK == "BUSCAR") {
    	//conexion al servidor de base de datos
    	$dbh=mysql_connect ("localhost", "root")or die ('problema conectando porque:'.mysql_error());
    	//seleccionado la base de datos
    	msql_select_db("alumnos4" ,$dbh);
    	//preparando la instruccion sql

    	$q="select * 'from datos_alumnos' where nombre='$NOMBRE'";
    	//ejecutando el query select regresa un rowset
    	$alumnos=mysql_query("$q",$dbh)or die ("problemon con query");
    	//regresando renglon con registro
    	if($reg=mysql_fetch_row($alumnos))
    	{
    		//construyendo forma dinamica
    		echo "<FORM ACTION=editar2.php METHOD=post>";
    		//recodar que strings se encadenan con .
    		echo "NOMBRE:<INPUT TYPE=text Name=NOMBRE value=\"".$reg[0]."\"><BR>";
    		echo "DIRECCION:<INPUT TYPE=text NAME=DIRECCION value=\"".$reg[1]."\"><BR>";
    		echo "TELEFONO:<INPUT TYPE=text NAME=TELEFONO value=\"".$reg[2]."\"><BR>";
    		//echo"<input type=hidden name=NOMBRE value=$reg[0]>";
    		echo"<INPUT TYPE=submit NAME=OK VALUE=editar><BR>";
    		echo"</FORM>";
    	}
    	else
    	{
    		echo"No existe un alumno con ese nombre.";
    	}
        }
        if($OK == "editar")
        {
        	//conexion al servidor de bases de datos
        	$dbh=mysql_connect("localhost","root") or die ('problema conectando porque:'.mysql_error());
        	//seleccionado la base de datos
        	mysql_select_db("alumnos4",$dbh);
        	//preparando la instruccion sql
        	$q = "UPDATE alumnos set nombre='$NOMBRE', direccion='$DIRECCION',telefono='$TELEFONO' where nombre='$NOMBRE'";

        	//ejecutando el query
        	mysql_query("$q",$dbh) or die ("problemita con query");
        	//avisando
        	echo"REGISTRO EDITADO";
        }

        ?>