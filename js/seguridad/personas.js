function Registrar() 
{
  nombres = $("#nombres").val();
  apellidos = $("#apellidos").val();
  tipo = $("#tipo").val();
  documento = $("#documento").val();
  telefono = $("#telefono").val();
  ciudad = $("#ciudad").val();
  direccion = $("#direccion").val();
  correo = $("#correo").val();
  genero = $("#genero").val();
  favorito = $("#favorito").val();
  estado = $("#estado").val();

  var parametros = 
  {
    "boton" : "Registrar",
    "nombres" : nombres,
    "apellidos" : apellidos,
    "tipo" : tipo,
    "documento" : documento,
    "telefono" : telefono,
    "ciudad" : ciudad,
    "direccion" : direccion,
    "correo" : correo,
    "genero" : genero,
    "favorito" : favorito,
    "estado" : estado,
  };
  $.ajax(
  {
    data:  parametros,
    url:   '../../controller/seguridad/PersonasC.php',
    type:  'post',
    beforeSend: function() 
    {alert("Enviando...");}, 
    error: function()
    {
      alert("¡Error!");
    },
    complete: function() 
    {alert("¡Listo! Registro exitoso");},
    success:  function () {
      window.location.reload();
      alert("Datos enviados correctamente");
    } 
  })
}


function Eliminar(action) 
{

  var parametros = 
  {
    "boton" : "Eliminar",
    "id": action, 
  };
  $.ajax(
  {
    data:  parametros,
    url:   '../../controller/seguridad/PersonasC.php',
    type:  'post',
    beforeSend: function() 
    {alert("Eliminando...");}, 
    error: function()
    {alert("¡Error!");},
    complete: function() 
    {
      alert("¡Listo! Eliminación exitosa");
    },
    success:  function () {
      window.location.reload();
      alert("Datos eliminados correctamente");
    } 
  }) 
}

function Modificar() 
{
  id = $("#id").val();
  nombres = $("#nombres").val();
  apellidos = $("#apellidos").val();
  tipo = $("#tipo").val();
  documento = $("#documento").val();
  telefono = $("#telefono").val();
  ciudad = $("#ciudad").val();
  direccion = $("#direccion").val();
  correo = $("#correo").val();
  genero = $("#genero").val();
  favorito = $("#favorito").val();
  estado = $("#estado").val();

  var parametros = 
  {
    "boton" : "Modificar",
    "id": id,
    "nombres" : nombres,
    "apellidos" : apellidos,
    "tipo" : tipo,
    "documento" : documento,
    "telefono" : telefono,
    "ciudad" : ciudad,
    "direccion" : direccion,
    "correo" : correo,
    "genero" : genero,
    "favorito" : favorito,
    "estado" : estado,
  };
  $.ajax(
  {
    data:  parametros,
    url:   '../../../controller/seguridad/PersonasC.php',
    type:  'post',
    beforeSend: function() 
    {alert("Modificando..");}, 
    error: function()
    {alert("¡Error!");},
    complete: function() 
    {alert("¡Listo! Modificación Exitosa");},
    success:  function () {
      window.location.href = "../../../view/seguridad/personas.php";
      alert("Datos corregidos correctamente");
    } 
  })
}

// Utilizando jQuery $(document).ready()
$(document).ready(function() {
  Consultar();
});

function Consultar() {
  var parametros = {
    "boton": "Consultar"
  };

  $.ajax({
    data: parametros,
    url: '../../controller/seguridad/PersonasC.php',
    type: 'post',
    beforeSend: function() {
      alert("Enviando...");
    },
    error: function() {
      alert("¡Error!");
    },
    complete: function() {
      alert("¡Listo! Registro exitoso");
    },
    success: function(respuesta) {
      if(respuesta['action']=='Consultar' && respuesta['numeroRegistros']>1){
        $("#dataResult").html(respuesta['tablaRegistro']);
    }
    }
  });
}