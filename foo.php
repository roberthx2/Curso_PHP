<?php
// Disponible desde PHP 4.1.0

   echo $_POST['username'].'<br>';
   echo $_REQUEST['username'].'<br>';

   import_request_variables('p', 'p_');
   echo $p_username;

// Desde PHP 5.0.0, las variables predefinidas largas se pueden
// desactivar con la directiva register_long_arrays.
  // echo $HTTP_POST_VARS['username'];

// Disponible si la directiva de PHP register_globals = on. A partir de
// PHP 4.2.0 el valor predeterminado de register_globals = off.
// Usar o depender de este método no es recomendable.

//   echo $username;
?>