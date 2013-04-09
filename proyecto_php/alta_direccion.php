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
                  <div  id="cabecera" >
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
             <form name="Datos">
            <p>Nombre: <input type="text" name="Nombre" id="nombre"></p>
            <p>Apellidos: <input type="text" name="Apellidos" id="apellidos"></p>
            <p>Direcci&oacute;n: <input type="text" name="Direccion" id="direccion"></p>
            <p>Via:<select id="TipoVia"  onChange="Telefono();">
			<option value="Calle">Calle</option>
   			<option value="Avenida">Avenida</option>
   			<option value="Plaza">Plaza</option>
  		 	<option value="Bulevar">Bulevar</option>
			</select></p>
            <p>C&oacute;digo postal: <input type="text" name="Codigopostal" id="codigo"></p>
            <p>Localidad: <input type="text" name="Localidad" id="localidad"></p>
            <p>Provincia <input type="text" name="Provincia" id="provincia"></p>
            <p>Otros:</p><p> <textarea></textarea></p>
            <p> <input type="button" value="Comprobar" onclick="CompruebaDireccion(window.document.Datos.nombre.value, 
            window.document.Datos.apellidos.value,
            window.document.Datos.direccion.value, window.document.Datos.codigo.value,
            window.document.Datos.localidad.value,
            window.document.Datos.provincia.value)">
                  <input type="reset" name="borrar" value="Borrar">
                  <input type="button" name="Atras" value="Volver Atras"></p>
      </form>
      
                  </div>
      </div>
     
      
  </body>
</html>