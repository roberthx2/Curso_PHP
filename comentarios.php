<DOCTYPE! html>
<html lang = "es">
<meta charset = "utf-8"/>
	<head>
		<title>Comentarios.php</title>
	</head>
<body>

<?php

	//Aqui les va un ejemplo de cometario de una linea
	#Esta es otra forma de hacer comentarios en PHP

	//Este tipo de comentario puede estar a todo lo largo de una linea sin ningun problema, aunque la idea es que no sean comentarios de mas de 80 caracteres, como NO lo es en este caso

	//Esta es una sentencia que imprime "Hola Mundo!!" mediante la función echo, estos comentarios pueden abarcar una linea solo para el
	echo "Hola Mundo!!<br>";

	//O tambien se pueden colocar al lado de una sentencia específica
	//A estos comentarios se les conoce como "inline" o "en línea", por ejemplo:
	echo "Hola Mundo!! 2<br>"; //Salida: Hola Mundo!! 2

	//Como en este caso anterior, esto no genera error y es totalmente valido...

	//Los comentario son ignorados por el interprete de PHP
	//Se ignoran hasta un salto de linea o un delimitador cerrado de PHP
	//Como es este caso  Aqui ya no es tomado como un comentario

	//Comentarios de Multiples líneas:

	/* Esto es un ejemplo de comentarios de multiples líneas, el
	interprete ignora todo lo que este entre los delimitadores */

	/* Hay que tener cuidado de no cometer errores como el de anidar
	comentarios, por ejemplo: /* Este comentario esta anidado y puede
	mostrar error /*/

	/* La sintaxis multi-linea tambien puede ser usada para una 
	sola línea, aunque no es la idea*/

	/*Este es un ejemplo de comentario multi-linea un una línea*/


?>

</body>
</html>