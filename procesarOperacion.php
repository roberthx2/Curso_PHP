<!DOCTYPE html>
<html lang = "es">
<meta charset = "utf-8"/>
<head>
    <title> Practica Formulario 2 </title>
</head>
<body>
	<?php 
  		if ($_REQUEST['operacion']=="suma") 
  		{ 
    		$suma=$_REQUEST['num1'] + $_REQUEST['num2']; 
    		echo "La suma es:".$suma; 
  		} 
  		else 
  		{ 
    		if ($_REQUEST['operacion']=="resta") 
    		{ 
      			$resta=$_REQUEST['num1'] - $_REQUEST['num2']; 
      			echo "La resta es:".$resta; 
    		}
    		else
    		{
    			if ($_REQUEST['operacion']=="multiplicacion") 
    			{ 
      				$multiplicacion=$_REQUEST['num1'] * $_REQUEST['num2']; 
      				echo "La multiplicacion es:".$multiplicacion; 
    			}
    			else
    			{
    				if ($_REQUEST['operacion']=="division") 
    				{ 
      					$division=$_REQUEST['num1'] / $_REQUEST['num2']; 
      					echo "La division es:".$division; 
    				}
    				else
    				{
    					if ($_REQUEST['operacion']=="modulo") 
    					{ 
      						$modulo=$_REQUEST['num1'] % $_REQUEST['num2']; 
      						echo "El modulo es:".$modulo; 
    					}
    				}
    			}
    		}
  		} 
 	?>
 </body>
 </html> 
