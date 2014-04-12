<?php

include 'db-conf.php';

if(isset($_POST['nombre'])  and !empty($_POST['nombre']) and 
	isset($_POST['cedula'])  and !empty($_POST['cedula']) and
	isset($_POST['pwd'])  and !empty($_POST['pwd'])) {


	$con = mysql_connect($host, $user, $pwd) or die ("Fallo de conexion");
	mysql_select_db($db, $con) or die("Fallo al conectar con $db");

	mysql_query("INSERT INTO persona (NOMBRE, CEDULA, PASSWORD) VALUES ('$_POST[nombre]', '$_POST[cedula]', '$_POST[pwd]')", $con);
	echo "Datos insertados";

} else {

	echo "Problema al insertar datos";
}


?>