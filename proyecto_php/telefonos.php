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
  <!---- Contenerdor------>
      <div id="contenedor">
            <!-------Cabecera-->
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
            <!-------Indice------>
                  <div id="indice">
                  
                    <!-------Lista de Links a las paginas -->
                        <ul id="menu">
                        <li><a id="menu" href="index.php"> Presentaci&oacute;n</a> </li>
                        <li><a id="menu" href="album.php">Album</a></li>
                        <li><a id="menu" href="direcciones.php">Direcciones</a></li>
                        <li><a id="menu" href="telefonos.php">Telefonos</a></li>
                     </ul>
                             
                  </div>      
            <!-------Cuerpo------>
                  <div id="cuerpo">
                  <div id="botones" align="center">
                              <form >
                                    <input id="boton1" type="button" value="Ocultar indice" onclick="cambiarBoton1()">
                                    <input id="boton2" type="button" value="Ocultar cabecera" onclick="cambiarBoton2()">
                                    <?php
                                          if(isset($_SESSION['nombre'])) {
                                                $nombre=$_SESSION['nombre'];
                                                header ("Location: ./agenda_telefonos.php");
                                          }
                                    ?>
                              </form>
                        
                        </div>
                       <form align="center" action="validarTelefono.php">
                              <p>Nombre: <input id="text" type="text" name="usuario"></p>
                              <p>Contraseña: <input type="password" name="password"></p>
                              <input type="reset" name="borrar" value="Borrar">
                              <input type="submit" name="Aceptar" value="Aceptar"></p>
                        </form>    
                  </div>
      </div>
      
      
      
  </body>
</html>