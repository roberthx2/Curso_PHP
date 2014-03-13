<?php

//Comprobación de los tipos de dato en PHP


//Declaramos una variable por cada tipo de dato que conocemos

$num = 7; //Entero

$numF = 3.14; //Flotante

$cad = "Esto es un String"; // String

$arr = array('hola' , 1, 25.4, TRUE);

$bool = FALSE; //Booleano

$nulo = NULL; // NULL


/* Vamos a comprobar una por una las variables
   con sus funciones correspondientes */

//Comprobando enteros con is_int()

echo "El valor de la comprobacion de entero con la variable $num es: ".is_int($num)."<br>";

//Comprobando flotantes con is_float()

echo "El valor de la comprobacion de entero con la variable $numF es: ".is_float($numF)."<br>";

//Comprobando arreglos con is_array()

echo "El valor de la comprobacion de entero con la variable $arr es: ".is_array($arr)."<br>";

//Comprobando booleanos con is_bool()

echo "El valor de la comprobacion de entero con la variable $bool es: ".is_bool($bool)."<br>";

//Comprobando una variable especial NULL con is_null()

echo "El valor de la comprobacion de entero con la variable $nulo es: ".is_null($nulo)."<br>";

?>