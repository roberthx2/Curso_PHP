<?php

include 'db-conf.php';

$con = mysql_connect($host,$user,$pwd)
or die("Fallo en la conexion con la base de datos");

$reg = mysql_query("SELECT id FROM Curso WHERE nombre = '$_POST[nombre]'", $con)
or die("Fallo en el query");

if ($re = mysql_fetch_array($reg)){

mysql_query("DELETE FROM Curso WHERE NOMBRE = '$_POST[nombre]'", $con);

echo "registros eliminados";

} else {

echo "Problemas al conseguir los registros";

}


?>
