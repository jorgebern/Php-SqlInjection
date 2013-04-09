<?php
      session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
      <head>
      </head>
      <body>
  
      <?php
            if(isset($_SESSION['nombre'])) {
                  session_destroy();
                   header ("Location: ./index.php");
            } else {
                  echo("<a href='./direcciones.html'>--ERROR-- La sesion a caducado</a>");
            }
      ?>
      
      
      </body>
</html>