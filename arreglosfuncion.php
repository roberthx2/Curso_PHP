<?php

// Funciones de Manejo de Arreglos
	//Se declaran los arrays con los que se va a trabajar
	$array1 = array(1, 2, 3, 4, 4, 4, 4, 2, 1, 1, 7, 8 );
	$array2 = array(5, 6, 7, 8 );
	$array3 = array('fruta' => array ('naranja', 'manzana') , 9, 10, TRUE);
	$transport = array('pie', 'bici', 'coche', 'avi&oacuten');

//Funcion count(), sizeof()

$res = count($array1); //Funcion que cuenta la cantidad de elementos en un array

echo "Resultado funci&oacuten count() : ". $res . "<br>"; //Imprime 12

$res = sizeof($array1);

echo "Resultado funci&oacuten sizeof() : ". $res . "<br>";
echo "<hr>";

//Funcion array_count_values()

$res = array_count_values($array1); /*Esta funcion devuelve un array con la cantidad de repeticiones
									de cada uno de los elementos del array original*/

echo "Resultado funci&oacuten array_count_values() : ";
echo var_dump($res) . "<br>"; //
echo "<hr>";

//Funcion array_merge()

$res = array_merge($array2, $array3); //Funcion que une los arrays seleccionados

echo "Resultado funci&oacuten array_merge() : ";
echo var_dump($res) ."<br>"; // Imprime la union de los arrays
echo "<hr>";

//Funcion sort()

$res = sort($array1); //Funcion que ordena los elementos del array, devuelve verdadero o falso
echo "Resultado de la funcion sort: ". $res . "<br>";
echo "Array organizado: <br>";
echo var_dump($array1);
echo "<br>";

$res = sort($array2); //Funcion que ordena los elementos del array, devuelve verdadero o falso
echo "Resultado de la funcion sort: ". $res . "<br>";
echo "Array organizado: <br>";
echo var_dump($array2);
echo "<br>";

$res = sort($array3); //Funcion que ordena los elementos del array, devuelve verdadero o falso
echo "Resultado de la funcion sort: ". $res . "<br>";
echo "Array organizado: <br>";
var_dump($array3);
echo "<br>";

echo "<hr>";

//Funcion current, next, prev, end, reset

/* Esta serie de funciones modifican el puntero interno del array
   next avanza, prev retrocede, end apunta a la ultima posición y 
   current brinda la posicion actual del puntero */

$mode = current($transport); // $mode = 'pie';
echo $mode . ", ";
$mode = next($transport);    // $mode = 'bici';
echo $mode . ", ";
$mode = current($transport); // $mode = 'bici';
echo $mode . ", ";
$mode = prev($transport);    // $mode = 'pie';
echo $mode . ", ";
$mode = end($transport);     // $mode = 'avión';
echo $mode . ", ";
$mode = current($transport); // $mode = 'avión';
echo $mode . ", ";
$mode = reset($transport);	 // $mode = 'pie';
echo $mode . "<br>";

$arr = array();
var_dump(current($arr)); // bool(false)
echo "<br>";

$arr = array(array());
var_dump(current($arr)); // array(0) { }
echo "<br>";

echo "<hr>";

//Funcion each()

$res = each($transport); /* Esta funcion devuelve la clave y el valor de la posicion
							de un elemento del array en un formato específico */
print_r($res);
echo "<br>";

next($transport);

$res = each($transport);
print_r($res);
?>

