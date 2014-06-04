<!DOCTYPE html>
<html lang = "es">
<meta charset = "utf-8"/>
<head>
    <title> Ciclos while2</title>
</head>
<body>
	<?php
		$i = 1;
		
		while($i <= $_GET['num'])
		{
			echo "$i <br>";
			$i++;
		}
	?>
</body>
</html>
