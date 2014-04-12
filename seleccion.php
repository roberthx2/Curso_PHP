<?php

include 'db-conf.php';

$con = mysql_connect($host, $user, $pwd)
or die ("problemas al conectar con el servidor de Bases de datos");
mysql_select_db($db, $con) or die("Fallo al conectar con $db");

$registro = mysql_query("SELECT * FROM persona WHERE nombre = '$_POST[nombre]'", $con)
or die ("Problemas con el query");

while ($reg = mysql_fetch_array($registro)){

echo $reg['nombre']."<br>";
echo $reg['cedula']."<br>";

}

?>
