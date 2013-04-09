
function cambiarBoton1() {
      
      if(document.getElementById("boton1").value == "Ocultar indice") {
            ocultarIndice();
      }else {
            mostrarIndice();
            }
            
}

function mostrarIndice() {
      document.getElementById("indice").style.display = "block";
      document.getElementById("boton1").value = "Ocultar indice";
}


function ocultarIndice() {
      document.getElementById("indice").style.display = "none";
      document.getElementById("boton1").value = "Mostrar indice";
}

function cambiarBoton2() {
      
      
      if(document.getElementById("boton2").value == "Ocultar cabecera") {
            ocultarCabecera();
      }else {
            mostrarCabecera();
            }
            
}

function mostrarCabecera() {
      document.getElementById("cabecera").style.display = "block";
      document.getElementById("boton2").value = "Ocultar cabecera";
}


function ocultarCabecera() {
      document.getElementById("cabecera").style.display = "none";
      document.getElementById("boton2").value = "Mostrar cabecera";
}

function Telefono()
{
      if(document.getElementById("TipoTelefono").value=="Fijo")
      {
            document.getElementById("TelefonoFijo").value="9";
            document.getElementById("TelefonoMovil").value="";
      }
      else
      {
            document.getElementById("TelefonoMovil").value="6";
            document.getElementById("TelefonoFijo").value="";
      }
}

function Comprueba(Nombre, Apellidos, TelefonoFijo, TelefonoMovil, Email, Twitter)
{
      if(Nombre=="" || Apellidos=="" || TelefonoFijo=="" || TelefonoMovil=="" || Email=="" || Twitter==""  )
      {
            
            alert("Faltan campos por rellenar");
            if(Nombre=="")
                  document.getElementById("Nombre").style.borderColor = 'red';
            if(Apellidos=="")
                  document.getElementById("Apellidos").style.borderColor = 'red';
            if(TelefonoFijo=="")
                  document.getElementById("TelefonoFijo").style.borderColor = 'red';
            if(TelefonoMovil=="")
                  document.getElementById("TelefonoMovil").style.borderColor = 'red';
            if(Email=="")
                  document.getElementById("Email").style.borderColor = 'red';
            if(Twitter=="")
                  document.getElementById("Twitter").style.borderColor = 'red';
      }
      else
      {
            if(Twitter.charAt(0) != "@")
                  alert("Twitter no introducido correctamente");
            else
            {	
                  var validacion = "abcdefghijklmnopqrstuvwxyz0123456789";
                  for(i = 1; i<Twitter.length; i++)
                  {
                        if(validacion.indexOf(Twitter.charAt(i))<0)
                        {
                               alert("Error, alguno de los caracteres seguidos de @ no es alfanumérico");
                               return ;
                        }
                  }
            }

            if(Email != "")//Solo vaído los correos _____@hotmail.com
            {
                  if(Email.indexOf(".",Email.length-4) >= 0 || Email.lastIndexOf("@",Email.length-12) >= 0)
                        EnviarFormulario()
                  else
                        alert("E-mail incorrecto, solo válido _____@hotmail.com");	
            }
      
      }
}

function EnviarFormulario()
{
      alert("Enviando formulario...");
      document.Datos.action="mailto:www.google.es?subject=Formulario";
      document.Datos.submit();
}

function Telefono()
{
      if(document.getElementById("TipoVia").value=="Calle")
            document.getElementById("direccion").value="C";
      else
            if(document.getElementById("TipoVia").value=="Avenida")
                  document.getElementById("direccion").value="A";
            else
                  if(document.getElementById("TipoVia").value=="Plaza")
                        document.getElementById("direccion").value="P";
                  else
                        if(document.getElementById("TipoVia").value=="Bulevar")
                              document.getElementById("direccion").value="B";
}


function CompruebaDireccion(nombre, apellidos, direccion, codigo, localidad, provincia)
{
      var objeto = document.getElementById("cuerpo");   
      if(nombre=="" || apellidos=="" || direccion=="" || codigo=="" || localidad=="" || provincia=="")
      {
            
            alert("Faltan campos por rellenar");
            if(nombre=="")
                  document.getElementById("nombre").style.borderColor = 'red';
            if(apellidos=="")
                  document.getElementById("apellidos").style.borderColor = 'red';
            if(direccion=="")
                  document.getElementById("direccion").style.borderColor = 'red';
            if(codigo=="")
                  document.getElementById("codigo").style.borderColor = 'red';
            if(localidad=="")
                  document.getElementById("localidad").style.borderColor = 'red';
            if(provincia=="")
                  document.getElementById("provincia").style.borderColor = 'red';
      }
      else
            if (codigo.length!=5 || isNaN(codigo))
            {	
                  alert("El código postal debe ser numérico y debe tener 5 dígitos");
                  document.getElementById("codigo").style.borderColor = 'red';
            }
            else
            {
                  alert("Enviando formulario...");
                  document.Datos.submit();
            }
}



