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
            <!---Indice -->
      <div id="indice">
      
        <!-------Lista de Links a las paginas----->
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
                                          if(isset($_session['nombre'])) {
                                                $nombre=$_SESSION['nombre'];
                                                echo ($nombre." ( <a href='salir.php'> Salir </a> )");
                                          }
                                    ?>
                              </form>
                        
                        </div>
                  <table id="tabla_album">
                        <tr>
                        <td><a href="./imagenes/1.gif" target="_blank"><img class="fotos_album" src="./imagenes/1.gif"></a><br>
                              <font align="left">pantallazo</font></td>
                        <td><a href="./imagenes/2.gif" target="_blank"><img class="fotos_album" src="./imagenes/2.gif"></a><br>
                              <font>beisbol</font></td>
                        <td><a href="./imagenes/3.gif" target="_blank"><img class="fotos_album" src="./imagenes/3.gif"></a><br>
                              <font>Mesazo</font></td>
                        <td><a href="./imagenes/4.gif" target="_blank"><img class="fotos_album" src="./imagenes/4.gif"></a><br>
                              <font>Ah! un oso!</font></td>
                        <td><a href="./imagenes/5.jpg" target="_blank"><img class="fotos_album" src="./imagenes/5.jpg"></a><br>
                              <font >Google</font></td>
                  </tr>
                  <tr>
                        <td><a href="./imagenes/6.jpg" target="_blank"><img class="fotos_album" src="./imagenes/6.jpg"></a> <br>
                              <font>pinguino</font></td>
                        <td><a href="./imagenes/7.gif" target="_blank"><img class="fotos_album" src="./imagenes/7.gif"></a><br>
                              <font>Gatete</font></td>
                        <td><a href="./imagenes/8.jpg" target="_blank"><img class="fotos_album" src="./imagenes/8.jpg"></a><br>
                              <font>Saltos</font></td>
                        <td><a href="./imagenes/9.gif" target="_blank"><img class="fotos_album" src="./imagenes/9.gif"></a><br>
                              <font>Platano</font></td>
                        <td><a href="./imagenes/10.gif" target="_blank"><img class="fotos_album" src="./imagenes/10.gif"></a><br>
                              <font>Troll</font></td>
                  </tr>
            </table>
                  </div>
      </div>
      
  </body>
</html>