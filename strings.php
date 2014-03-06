<!DOCTYPE html>
<html>
<head>
	<title>String en PHP</title>
</head>
<body>
<?php

$nombre = "Angel";
echo "Esto es una declaracion con comillas dobles, por aqui paso la variable con mi nombre $nombre";
echo "<hr>";
echo 'Esto es una declaracion con comillas dobles, por aqui paso la variable con mi nombre $nombre';
echo '<hr>';
echo <<<EOD
Todo esto que esta aca esta hecho con la sintaxis Heredoc, mi nombre es '$nombre'
EOD;
echo <<<EOD
</hr> 
EOD;
echo <<<'IDENTIFICADOR'
Todo esto esta hecho con la sintaxis Nowdoc, ¿Que tal?
Aqui esta mi nombre: '$nombre'
IDENTIFICADOR;
?>


</body>
</html>