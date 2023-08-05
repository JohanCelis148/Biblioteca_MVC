<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../asset/css/view/seguridad/personas.css">
    <script src="../../../js/seguridad/usuarios.js"></script>
    <script src="../../../asset/library/node_modules/jquery/dist/jquery.js"></script>
    <link rel="stylesheet" href="../../../asset/library/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <title>Document</title>
</head>
<body>
    <?php
        $id = $_REQUEST['id'];
        $conexion = mysqli_connect("localhost" , "root" , "" , "practica") or die ("Error");
        $query = "SELECT * FROM usuarios WHERE id='$id'";
        $resultado = $conexion->query($query);
        $row = $resultado->fetch_assoc();
    ?>
    <br><br><br><br>
    <h3 class="titulo">Modificar usuario <?php echo $row['usuario']?></h3>
    <br><br>
    <form class="row g-3">
        <div class="col-md-2">
            <label for="validationDefault04" class="form-label">Persona Asociada</label>
            <select class="form-select" id="personaId" name="personaId" required readonly onmousedown="return false;">
              <option selected disabled value="<?php echo $row['persona_id']?>">* <?php echo $row['persona_id']?> *</option>
            </select>
        </div>
        <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $row['id'] ?>">
        <div class="col-md-2">
          <label for="validationDefault01" class="form-label">Usuario</label>
          <input type="text" class="form-control" id="usuario" name="usuario" value="<?php echo $row['usuario']?>" required placeholder="Ingrese el usuario">
        </div>
        <div class="col-md-3">
          <label for="validationDefault01" class="form-label">Contraseña</label>
          <input type="password" class="form-control" id="contrasenia" name="contrasenia" value="<?php echo $row['contrasenia']?>" required  placeholder="Digite la contraseña"><div style="position: relative; float: right; top:5px">
          <input type="checkbox" id="mostrar_contrasena"  title="clic para mostrar contraseña"/>
          &nbsp;&nbsp;Mostrar Contraseña</div>
        </div>
        <div class="col-md-2">
          <label for="validationDefault04" class="form-label">Rol</label>
          <select class="form-select" id="rol" name="rol" required>
            <option selected  value="<?php echo $row['rol']?>">* <?php echo $row['rol']?> *</option>
            <option value="Administrador">Administrador</option>
            <option value="Empleado">Empleado</option>
            <option value="Cliente">Cliente</option>
          </select>
        </div>
        <div class="col-md-2">
          <label for="validationDefault04" class="form-label">Estado</label>
          <select class="form-select" id="estado" name="estado" required>
            <option selected  value="<?php echo $row['estado']?>">* <?php echo $row['estado']?> *</option>
            <option value="Activo">Activo</option>
            <option value="Inactivo">Inactivo</option>
          </select>
        </div>
        <div class="col-11">
          <br>
            <button id="boton"  class="btn btn-warning" onclick="Modificar()">Modificar</button>
            <button id="boton" type="reset" class="btn btn-primary">Restaurar</button>
        </div>

    </form>
</body>
<script>
$(document).ready(function () {
  $('#mostrar_contrasena').click(function () {
    if ($('#mostrar_contrasena').is(':checked')) {
      $('#contrasenia').attr('type', 'text');
    } else {
      $('#contrasenia').attr('type', 'password');
    }
  });
});
</script>
</html>