<?php
      session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
  <head>
     <title> Iframes </title>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
     <meta name="author" content="Jorge Bernabeu Mira">
     <meta name="copyright" content="Jorge Bernabeu Mira">
     <meta name="description" content="Proyecto HTML para la clase de Lenguaje de marcas">
     <meta name="keywords" content="HTML">
     <link rel="stylesheet" type="text/css" href="./estilos/estilos1.css" title="estilos1">
     <link rel="alternate stylesheet" type="text/css" href="./estilos/estilos2.css"
     title="estilos2">
     <script language="Javascript" type="text/javascript"
      src="scripts/comun.js">
      
      </script>
  </head>
  <body>
  <!-- Contenerdor-->
  <div id="contenedor">
            <!---Cabecera-->
                  <div id="cabecera">
                  <table>
                  <tr>
                      <td>
                        <image id="imagen_inicio" src="./imagenes/hello.png">
                        </td>
                        <td>
                              <h1>Cachirulos y porrazos</h1>
                        </td>
                  </tr>
            </table>            
                  </div>
            <!--Lista de Links a las paginas-->
                  <div id="indice">
                  <ul id="menu">
                        <li><a id="menu" href="index.php"> Presentaci&oacute;n</a> </li>
                        <li><a id="menu" href="album.php">Album</a></li>
                        <li><a id="menu" href="direcciones.php">Direcciones</a></li>
                        <li><a id="menu" href="telefonos.php">Telefonos</a></li>
                     </ul>
                        
                  </div>      
            <!---Cuerpo-->
                  <div id="cuerpo">
                        <div id="botones" align="center">
                              <form >
                                    <input id="boton1" type="button" value="Ocultar indice" onclick="cambiarBoton1()">
                                    <input id="boton2" type="button" value="Ocultar cabecera" onclick="cambiarBoton2()">
                              <?php
                                   
                                    if(isset($_SESSION['nombre'])) {
                                          $nombre=$_SESSION['nombre'];
                                          echo ($nombre." ( <a href='salir.php'> Salir </a> )");
                                    } else {
                                          echo("<a href='./direcciones.php'>Inicie sesion porfavor</a>");
                                          return;
                                          }
                              ?>
                              </form>
                              
                        </div>
                        
                        
                        
      <table id="datos">
        <caption>Agenda de direcciones</caption>
        <thead>
        <tr>
            <td>Nombre </td>
            <td width="50">Apellido</td>
            <td>Direcci&oacute;n</td>
            <td>C&oacute;digo postal</td>
            <td>Localidad</td>
            <td>Otros</td>
      </tr>
      </thead>
      <?php
      
             $conexion=@mysql_connect("localhost","root", "");
            if(!$conexion) {
                  echo ("--ERROR-- conexion fallida");
                  return;
            }
  
            if(!mysql_select_db("proyecto", $conexion)) {
                  echo ("--ERROR-- Servidor erroneo");
                  return;
            }
            
            $query="select * from usuarios";
            
            $result=@mysql_query($query, $conexion);
            
            if(!$result) {
                  echo ("--ERROR-- select incorrecta");
                  return;
            }
            
            $total=mysql_num_rows($result);
            $contador=0;
            
            while($contador < $total) {
                  echo("<tbody>");
                  echo("<tr>");
                        echo("<td>");
                              echo (mysql_result($result, $contador, 'Nombre'));
                        echo("</td>");
                        echo("<td>");
                              echo (mysql_result($result, $contador, 'Apellidos'));
                        echo("</td>");
                        echo("<td>");
                               echo (mysql_result($result, $contador, 'Tipo_via') .":". mysql_result($result, $contador, 'Direccion'));
                        echo("</td>");
                        echo("<td>");
                              echo (mysql_result($result, $contador, 'Codigo_postal'));
                        echo("</td>");
                        echo("<td>");
                              echo (mysql_result($result, $contador, 'Localidad'));
                        echo("</td>");
                        echo("<td>");
                              echo (mysql_result($result, $contador, 'Otros'));
                        echo("</td>");
                  echo("</tr>");
                  echo("</tbody>");
                  $contador++;
            }
      ?>
      </table>
      
      <form>
            <a href="alta_direccion.php"><input type="button" name="añadir" value="Añadir"></a>
            <a href="eliminar_direccion.php"><input type="button" name="eliminar" value="Eliminar"></a>
      </form>
      <a href="./direcciones.php"><image width="100" height="50" src="./imagenes/atras.jpg"></a>
                  </div>
      </div>
  </body>
</html>