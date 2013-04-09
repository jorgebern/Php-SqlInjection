<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
      <head>
      </head>
      <body>
  
      <?php
            
            $usuario=$_REQUEST['usuario'];
            $contrasenya=$_REQUEST['password'];
            
            $conexion=@mysql_connect("localhost","root", "");
            
            if(!$conexion) {
                  echo ("--ERROR-- conexion fallida");
                  return;
            }
  
            if(!mysql_select_db("proyecto", $conexion)) {
                  echo ("--ERROR-- Servidor erroneo");
                  return;
            }
  
  
            $query="select Nombre_Usuario, Password from administradores";
            
            $result=@mysql_query($query, $conexion);
            
            if(!$result) {
                  echo ("--ERROR-- select incorrecta");
                  return;
            }
            
            $total=mysql_num_rows($result);
            $contador=0;
            $encontrado=false;
            while($contador < $total) {
            
                  $nombre=mysql_result($result, $contador, "Nombre_Usuario");
                  $password=mysql_result($result, $contador, "Password");
                  
                  if($nombre == $usuario  && $password == $contrasenya) {
                       $encontrado=true;
                  
                  }
                  
                  $contador++;
            }
            
            if($encontrado) {
                  session_start();
                  $_SESSION['nombre']=$usuario;
                  header ("Location: ./agenda_telefonos.php");
            } else {
                  echo("<a href='./telefonos.php'>--ERROR-- Contrase&ntilde;a o Usuario incorrecto</a>");

            }
            
            
      ?>
      </body>
</html>