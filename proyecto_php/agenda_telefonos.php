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
                        <image id="imagen_inicio"src="./imagenes/hello.png">
                        </td>
                        <td>
                              <h1>Cachirulos y porrazos</h1>
                        </td>
                  </tr>
            </table>
                        
                        
                        
                        
                        
                  </div>
            <!---Indice-->
                  <div id="indice">
                  
                    <!---Lista de Links a las paginas-->
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
                        <center>
      <table id="datos">
        <caption>Agenda de direcciones</caption>
        <thead>
        <tr>
            <td></td>
            <td>Nombre</td>
            <td>Apellidos</td>
            <td>Tipo Telefono</td>
            <td>Tel&eacute;fono movil</td>
            <td>E-mail<img id="pequenas" src="./imagenes/gmail.gif"></td>
            <td>Twitter<img id="pequenas"src="./imagenes/twitter.png"></td>
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
            
            $query="select * from usuarios, telefonos where telefonos.Id_usuario = usuarios.Id_usuario";
            
            $result=@mysql_query($query, $conexion);
            
            if(!$result) {
                  echo ("--ERROR-- select incorrecta");
                  return;
            }
            
            $total=mysql_num_rows($result);
            $contador=0;
            while($contador<$total) {
                 echo("<tbody>");
                  echo("<tr>");
                     echo("<td>");
                              echo (mysql_result($result, $contador, 'Id_usuario'));
                        echo("</td>");
                      echo("<td>");
                              echo (mysql_result($result, $contador, 'Nombre'));
                        echo("</td>");
                      echo("<td>");
                              echo (mysql_result($result, $contador, 'Apellidos'));
                        echo("</td>");
                      echo("<td>");
                              echo (mysql_result($result, $contador, 'Tipo_telefono'));
                        echo("</td>");
                      echo("<td>");
                              echo (mysql_result($result, $contador, 'Numero_telefono'));
                        echo("</td>");
                      echo("<td>");
                              echo (mysql_result($result, $contador, 'E-mail'));
                        echo("</td>");
                      echo("<td>");
                              echo (mysql_result($result, $contador, 'Twitter'));
                        echo("</td>");
                  echo("</tr>");
                  echo("</tbody>");
                  $contador++;
            }
            
        ?>
      </table>
      <a href="./alta_telefono.php"><input type="button" name="anyadir" value="Añadir"></a>
      </form>
      <a href="./telefonos.php"><image src="./imagenes/atras.jpg"></a>
                  </div>
      </div>
   </body> 
</html>    
       