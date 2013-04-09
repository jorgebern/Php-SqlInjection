<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
  <head>
     <title> Iframes </title>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
     <meta name="author" content="Jorge Bernabeu Mira">
     <meta name="copyright" content="Jorge Bernabeu Mira">
     <meta name="description" content="Proyecto HTML para la clase de Lenguaje de marcas">
     <meta name="keywords" content="HTML">
     <meta http-equiv="refresh" content="5;url=agenda_telefonos.html"> 
     <link rel="stylesheet" type="text/css" href="./estilos/estilos1.css" title="estilos1">
     <link rel="alternate stylesheet" type="text/css" href="./estilos/estilos2.css"
     title="estilos2">
     <script language="Javascript" type="text/javascript"
      src="scripts/comun.js">
      
      </script>
  </head>
  <body><!---- Contenerdor------>
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
                        <li><a id="menu" href="index.html"> Presentaci&oacute;n</a> </li>
                        <li><a id="menu" href="album.html">Album</a></li>
                        <li><a id="menu" href="direcciones.html">Direcciones</a></li>
                        <li><a id="menu" href="telefonos.html">Telefonos</a></li>
                     </ul>
                       
                  </div>      
            <!-------Cuerpo------>
                  <div id="cuerpo" >
                  <div id="botones" align="center">
                              <form >
                                    <input id="boton1" type="button" value="Ocultar indice" onclick="cambiarBoton1()">
                                    <input id="boton2" type="button" value="Ocultar cabecera" onclick="cambiarBoton2()">
                              </form>
                        
                        </div>
                        <p> <h1> ...Procesando su solicitud, espere unos segundos...</h1></p>
                        <p> <image src="./imagenes/loading.gif"></p>
                  </div>
      </div>
  
      
  </body>
</html>