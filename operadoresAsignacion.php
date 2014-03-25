<!DOCTYPE html>
<html lang = "es">
<meta charset = "utf-8"/>
<head>
	<title>Operadores de Asignación en PHP</title>
</head>
<body>
<?php

//Practica de Operadores de asignación en PHP

$x = 4;
echo "Valor inicial de \$x es $x <br>";

// Asignación por referencia

$y = &$x; //Se asigna a la variable $y una referencia a la variable $x

echo "Imprimimos la variable y <br>", $y , "<br>";
$x = "Este es el nuevo valor de la variable \$x<br>";
echo "Imprimimos lo que esta en y ahora : <br>" . $y;

?>
</body>
</html>