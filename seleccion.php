<?php

include 'db-conf.php';

$con = mysql_connect($host, $user, $pwd)
or die ("problemas al conectar con el servidor de Bases de datos");

$registro = mysql_query("SELECT * FROM Curso WHERE nombre = '$_POST[nombre]'",$con)
or die ("Problemas con el query", mysql_error());

while ($reg = mysql_fetch_array($registro)){

echo $reg['NOMBRE']."<br>";
echo $reg['CEDULA']."<br>";

}
?>
