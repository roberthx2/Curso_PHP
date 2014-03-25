<!DOCTYPE html>
<html lang = "es">
<meta charset = "utf-8"/>
<head>
	<title>Operadores Lógicos en PHP</title>
</head>
<body>
<?php

//Practica de Operadores Lógicos en PHP

// AND, la sintaxis para este puede ser "and" o "&&"
	echo "Compuerta AND: <br>";

	echo "false and false = ";
	var_dump(false and false);
	echo "<br>false and true = ";
	var_dump(false and true);
	echo "<br>true and false = ";
	var_dump(true and false);
	echo "<br>true and true = ";
	var_dump(true and true);
	echo "<hr>";


// OR, la sintaxis para este puede ser "or" o "||"
	echo "Compuerta OR: <br>";

	echo "false or false = ";
	var_dump(false or false);
	echo "<br>false or true = ";
	var_dump(false or true);
	echo "<br>true or false = ";
	var_dump(true or false);
	echo "<br>true or true = ";
	var_dump(true or true);
	echo "<hr>";

// XOR, la sintaxis es "xor"

	echo "Compuerta XOR: <br>";
	
	echo "false or false = ";
	var_dump(false xor false);
	echo "<br>false or true = ";
	var_dump(false xor true);
	echo "<br>true or false = ";
	var_dump(true xor false);
	echo "<br>true or true = ";
	var_dump(true xor true);


?>
</body>
</html>