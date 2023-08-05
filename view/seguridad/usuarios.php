<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../asset/css/view/seguridad/personas.css">
    <script src="../../js/seguridad/usuarios.js"></script>
    <script src="../../asset/library/node_modules/jquery/dist/jquery.js"></script>
    <link rel="stylesheet" href="../../asset/library/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <title>Document</title>
</head>
<body>
    <br><br><br><br>
    <h3 class="titulo">Registro Usuarios</h3>
    <br><br>
    <form class="row g-3">
        <div class="col-md-2">
            <label for="validationDefault04" class="form-label">Persona Asociada</label>
            <select class="form-select" id="personaId" name="personaId" required>
              <option selected disabled value="">--- Seleccione ---</option>
              <?php
                        $conexion = mysqli_connect("localhost" , "root" , "" , "practica") or die ("Error");
                        $query = "SELECT * FROM personas";
                        $resultado = $conexion->query($query);
                        while($row = $resultado->fetch_assoc()){
                          echo '<option value="'.$row["id"].'">'.$row["documento"].' - '.$row["nombres"].'  '.$row["apellidos"].'</option>';
                        }
              ?>
            </select>
        </div>
        <div class="col-md-2">
          <label for="validationDefault01" class="form-label">Usuario</label>
          <input type="text" class="form-control" id="usuario" name="usuario" required placeholder="Ingrese el usuario">
        </div>
        <div class="col-md-3">
          <label for="validationDefault01" class="form-label">Contraseña</label>
          <input type="password" class="form-control" id="contrasenia" name="contrasenia" required required placeholder="Digite la contraseña"><div style="position: relative; float: right; top:5px">
          <input  type="checkbox" id="mostrar_contrasena" title="clic para mostrar contraseña"/>
          &nbsp;&nbsp;Mostrar Contraseña</div>
        </div>
        <div class="col-md-2">
          <label for="validationDefault04" class="form-label">Rol</label>
          <select class="form-select" id="rol" name="rol" required>
            <option selected disabled value="">--- Seleccione ---</option>
            <option value="Administrador">Administrador</option>
            <option value="Empleado">Empleado</option>
            <option value="Cliente">Cliente</option>
          </select>
        </div>
        <div class="col-md-2">
          <label for="validationDefault04" class="form-label">Estado</label>
          <select class="form-select" id="estado" name="estado" required>
            <option selected disabled value="">--- Seleccione ---</option>
            <option value="Activo">Activo</option>
            <option value="Inactivo">Inactivo</option>
          </select>
        </div>
        <div class="col-11">
            <br>
            <button id="boton"  class="btn btn-success" onclick="Registrar()">Registrar</button>
            <button id="boton" type="reset" class="btn btn-danger">Limpiar</button>
        </div>

        <div class="col-11" >
          <br><br><br>
          <table class="table table table-striped" >
            <thead>
              <tr>
                <th scope="col">Persona Asociada</th>
                <th scope="col">Usuario</th>
                <th scope="col">Contraseña</th>
                <th scope="col">Rol</th>
                <th scope="col">Estado</th>
                <th scope="col" colspan="2">Funciones</th>
              </tr>
            </thead>
            <tbody>

              <?php
                        $conexion = mysqli_connect("localhost" , "root" , "" , "practica") or die ("Error");
                        $query = "SELECT * FROM usuarios";
                        $resultado = $conexion->query($query);
                        while($row = $resultado->fetch_assoc()){
              ?>

              <tr>
                <td><?php echo $row['persona_id'] ?></td>
                <td><?php echo $row['usuario'] ?></td>
                <td>**********</td>
                <td><?php echo $row['rol'] ?></td>
                <td><?php  
                  if ($row['estado'] == "Activo"){
                    echo "<span style=\"color:white; background:green; border-radius:2px; padding:4px\">".stripslashes($row["estado"])."</span>";}
                    elseif ($row['estado'] == "Inactivo"){
                    echo "<span style=\"color:white; background:red; border-radius:2px; padding:4px\">".stripslashes($row['estado'])."</span>";}
                ?></td>
                <td><a class="editar"  href="funciones/modificarusuario.php?id=<?php echo $row['id']?>"><i class="fi fi-rr-pencil"></i></a></td>
                <td><button id="boton" class="btn btn-danger" onclick="Eliminar('<?php echo $row['id']?>');"><i class="fi fi-rr-trash"></i></button></td>
              </tr>
              <?php
                 }
              ?>
            </tbody>
          </table>
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