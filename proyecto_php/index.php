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
            <!-------Cabecera--------->
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
                        <p> Cachirulos y porrazos, una empresa creada en el a&ntilde;o 5000Ac. No dedicamos a varias cosas.</p>
                        <p> El proposito general de la empresa es grabar/pintar/contar 
                              los porrazos de la gente a lo largo de la historia. Para ello usamos una gran cantidad de artilugios
                              con los que conseguimos recordar las grandes caidas. El porrazo de Fidel Castro... &iexcl;Nosotros lo grabamos!
                              , las caidas del escenario de cantantes borrachos... &iexcl;Si se&ntilde;or, fuimos nosotros!,
                              modelos que tropiezan... &iexcl;Tambien las tenemos!</p>
                        <p> Tambien nos dedicamos a la creacion de la pelusa amarilla para las pelotas de tenis, pero 
                              preferimos que nos reconozcais por lo anterior</p>
                  </div>
      </div>
      
      
  </body>
</html>