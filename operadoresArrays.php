<!DOCTYPE html>
<html lang = "es">
<meta charset = "utf-8"/>
<head>
	<title>Operadores de Arrays en PHP</title>
</head>
<body>
<?php

//Practica de Operadores de Arrays en PHP


//Union de arrays, código tomado de la documentación oficial de PHP
	echo "Union de Arrays con el operador +<br>";

	//Se inicializan dos arrays con claves similares pero con diferentes valores
	$a = array("a" => "apple", "b" => "banana");
	var_dump($a);
	echo "<br>";
	$b = array("a" => "pear", "b" => "strawberry", "c" => "cherry");
	var_dump($b);
	echo "<br>";

	echo "<hr>";

	// Aquí se demuestra que la union de arrays no es conmutativa
	$c = $a + $b; // Union of $a and $b
	echo "Union of \$a and \$b: \n";
	var_dump($c);

	echo "<br>";

	$c = $b + $a; // Union of $b and $a
	echo "Union of \$b and \$a: \n";
	var_dump($c);
	echo "<hr>";


// Arrays iguales, idénticos y su negación

	// Se inicializan arrays iguales pero no identicos
	$a = array("a" => "apple", "b" => "banana");
	var_dump($a);
	echo "<br>";
	$b = array("b" => "banana", "a" => "apple");
	var_dump($b);
	echo "<br>Igualdad: ";

	var_dump($a == $b); // Operador igual

	/* El resultado sera TRUE ya que poseen la mismas claves
	y los mismos elementos, pero no necesariamente estan en 
	el mismo orden */

	echo "<br>Identidad: ";
	var_dump($a === $b); // Operador de identico

	echo "<br>Desigualdad: ";
	var_dump($a != $b); // Operador de desigualdad

	echo "<br>No Identidad: ";
	var_dump($a !== $b); // Operador de no identidad

	echo "<hr>";

	// Se inicializan arrays identicos

	$a = array(1 , 2 , 3);
	var_dump($a);
	echo "<br>";
	$b = array(1 , 2 , 3);
	var_dump($b);
	echo "<br> Igualdad ";

	var_dump($a == $b); // Operador igual

	/* En este caso se observa que los arrays son identicos
	ya que tienen la misma cantidad de elementos, la
	misma clave y el mismo valor*/

	echo "<br>Identidad: ";
	var_dump($a === $b); // Operador de identico

	echo "<br> Desigualdad: ";
	var_dump($a != $b); // Operador de desigualdad

	echo "<br> No identidad: ";
	var_dump($a !== $b); // Operador de no identidad



?>
</body>
</html>