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
            <form name="Datos" method="post" enctype="text/plain" accept-charset="utf-8">
            <p>Nombre: <input type="text" name="Nombre" id="Nombre"></p>
            <p>Apellidos: <input type="text" name="Apellidos" id="Apellidos"></p>
            <p>Telefono fijo: <input type="text" name="telefonoFijo" id="TelefonoFijo"></p>
            <p>Telefono movil: <input type="text" name="telefonoMovil" id="TelefonoMovil"></p>
            <p>Tipo de tel&eacute;fono: <select id="TipoTelefono" onChange="Telefono();">
			<option value="Fijo">Fijo</option>
   			<option value="Movil">M&oacute;vil</option>
			<select></p>
            <p>E-mail: <input type="text" name="email" id="Email"></p>
            <p>Twitter <input type="text" name="twitter" id="Twitter"></p>
            
            <p> <input type="button" name="boton1" value="Comprobar" onclick="Comprueba(window.document.Datos.Nombre.value,
            window.document.Datos.Apellidos.value, window.document.Datos.TelefonoFijo.value, 
            window.document.Datos.TelefonoMovil.value, window.document.Datos.Email.value,
            window.document.Datos.Twitter.value)">
                  <input type="reset" name="borrar" value="Borrar">
                  <input type="button" name="Atras" value="Volver Atras"></p>
      </form>
      
                  </div>
      </div>
     
      
  </body>
</html>