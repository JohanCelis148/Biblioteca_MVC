function Registrar() {

  personaId = $("#personaId").val();
  usuario = $("#usuario").val();
  contrasenia = $("#contrasenia").val();
  rol = $("#rol").val();
  estado = $("#estado").val();

  var parametros =
  {
    "boton": "Registrar",
    "personaId": personaId,
    "usuario": usuario,
    "contrasenia": contrasenia,
    "rol": rol,
    "estado": estado,
  };
  $.ajax(
    {
      data: parametros,
      url: '../../controller/seguridad/UsuariosC.php',
      type: 'post',
      beforeSend: function () { 
        alert("Enviando..."); 
      },
      error: function () {
        alert("¡Error!");
      },
      complete: function () { 
        alert("¡Listo! Registro exitoso"); 
        window.location.reload();
      },
      success: function () {
        alert("Datos enviados correctamente!");
      }
    })
}


function Eliminar(action) {

  var parametros =
  {
    "boton": "Eliminar",
    "id": action,
  };
  $.ajax(
    {
      data: parametros,
      url: '../../controller/seguridad/UsuariosC.php',
      type: 'post',
      beforeSend: function () { alert("Eliminando..."); },
      error: function () { alert("¡Error!"); },
      complete: function () {
        alert("¡Listo! Eliminación exitosa");
        window.location.reload();
      },
      success: function () {
        alert("Datos eliminados correctamente");
      }
    })
}

function Modificar() {
  id = $("#id").val();
  personaId = $("#personaId").val();
  usuario = $("#usuario").val();
  contrasenia = $("#contrasenia").val();
  rol = $("#rol").val();
  estado = $("#estado").val();


  var parametros =
  {
    "boton": "Modificar",
    "id": id,
    "personaId": personaId,
    "usuario": usuario,
    "contrasenia": contrasenia,
    "rol": rol,
    "estado": estado,
  };
  $.ajax(
    {
      data: parametros,
      url: '../../../controller/seguridad/UsuariosC.php',
      type: 'post',
      beforeSend: function () { alert("Modificando.."); },
      error: function () { alert("¡Error!"); },
      complete: function () { 
        alert("¡Listo! Modificación Exitosa"); 
        window.location.href = "../../../view/seguridad/usuarios.php";
      },
      success: function () {
        alert("Datos corregidos correctamente");
      }
    })
}