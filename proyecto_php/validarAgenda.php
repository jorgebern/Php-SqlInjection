<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
      <head>
      </head>
      <body>
  
      <?php
            //Deprecated
            //Mirar SqlI


            $usuario=$_REQUEST['usuario'];
            $contrasenya=$_REQUEST['password'];
            
            //Conectar con la base de datos.
                  //Servidor - usuario - contraseña
                  //Servidor - usuario - contraseña - Nombre de la base de datos - puerto - socket.
            $conexion=@mysqli_connect("localhost", "root", "");
            
            //Error en la conexion
            if(!$conexion) {
                  echo ("--ERROR-- conexion fallida");
                  return;
            }
  
            //Seleccionamos la base de datos que queremos
            //return true, si va bien, false si sale mal.
            if(!mysqli_select_db("proyecto", $conexion)) {
                  echo ("--ERROR-- Servidor erroneo");
                  return;
            }
  
            //Select para consultar los datos
            $query="select Nombre_Usuario, Password from administradores";
            
            //Mandamos la sql con la conexion al servidor
            $result=@mysql_query($query, $conexion);
            
            //si la consulta anterior no devuelve nada, salimos
            if(!$result) {
                  echo ("--ERROR-- select incorrecta");
                  return;
            }
            
            //obtenemos el numero de filas que devuelve la sentencia SQL
            $total=mysql_num_rows($result);
            $contador=0;
            $encontrado=false;
            while($contador < $total) {
                  //seleccionamos el campo Nombre de usuario y password
                  $nombre= mysql_result($result, $contador, "Nombre_Usuario");
                  $password=mysql_result($result, $contador, "Password");
                  
                  //Comprobamos que sea correcto.
                  if($nombre == $usuario  && $password == $contrasenya) {
                       $encontrado=true;
                  
                  }
                  
                  $contador++;
            }
            
            if($encontrado) {
                  session_start();
                  $_SESSION['nombre']=$usuario;
                  header ("Location: ./agenda_direcciones.php");
            } else {
                  echo("<a href='./direcciones.php'>--ERROR-- Contrase&ntilde;a o Usuario incorrecto</a>");

            }
            
            /*
            $con = mysqli_connect("localhost", "usuario", "password", "tu_bd");

             verificar la conexion 
            if (mysqli_connect_errno()) {
                  echo "Hay error de conexion: ". mysqli_connect_error();
                  exit();
            }

            $sql = "SELECT Name, CountryCode FROM City ORDER by ID DESC LIMIT 50,5";

            if ($rs = mysqli_query($con, $sql)) {

                  /* fetch array asociativo
                  while ($fila = mysqli_fetch_assoc($rs)) {
                  echo $fila["Name"].' '.$fila["CountryCode"].'<br>';
            }

            /* liberamos la memoria asociado al resultado 
            mysqli_free_result($result);
            }

            /* cerrmos conexion
            mysqli_close($con)*/

      ?>
      </body>
</html>