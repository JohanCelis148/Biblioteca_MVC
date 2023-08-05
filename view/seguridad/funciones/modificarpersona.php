<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../../../js/seguridad/personas.js"></script>
    <script src="../../../asset/library/node_modules/jquery/dist/jquery.js"></script>
    <link rel="stylesheet" href="../../../asset/library/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel="stylesheet" href="../../../asset/css/view/seguridad/personas.css">
    <title>Personas</title>
</head>
<body>

    <?php
        $id = $_REQUEST['id'];
        $conexion = mysqli_connect("localhost" , "root" , "" , "practica") or die ("Error");
        $query = "SELECT * FROM personas WHERE id='$id'";
        $resultado = $conexion->query($query);
        $row = $resultado->fetch_assoc();
    ?>

    <br><br><br><br><br><br>
    <h3 class="titulo">Modificar los datos de <?php echo $row['nombres']?></h3>
    <br><br>
    <form class="row g-3" class="form">
    <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $row['id'] ?>">
        <div class="col-md-2">
          <label for="validationDefault01" class="form-label">Nombres</label>
          <input type="text" class="form-control" value="<?php echo $row['nombres'] ?>" id="nombres" name="nombres" required placeholder="Ingrese el nombre">
        </div>
        <div class="col-md-2">
          <label for="validationDefault01" class="form-label">Apellidos</label>
          <input type="text" class="form-control" id="apellidos" value="<?php echo $row['apellidos'] ?>"  name="apellidos" required  placeholder="Ingrese el apellido">
        </div>

        <div class="col-md-1">
            <label for="validationDefault04" class="form-label">Tipo</label>
            <select class="form-select" id="tipo" name="tipo" required>
              <option selected value="<?php echo $row['tipo'] ?>">-><?php echo $row['tipo'] ?></option>
              <option value="TI">TI</option>
              <option value="CC">CC</option>
            </select>
          </div>
        
        <div class="col-md-2">
          <label for="validationDefault02" class="form-label">Numero Documento</label>
          <input type="text" class="form-control" id="documento" value="<?php echo $row['documento'] ?>"  name="documento" required  placeholder="Ingrese el documento">
        </div>
        <div class="col-md-2">
          <label for="validationDefault02" class="form-label">Teléfono</label>
          <input type="text" class="form-control" id="telefono" value="<?php echo $row['telefono'] ?>"   name="telefono" required placeholder="Ingrese el telefono">
        </div>

        <div class="col-md-2">
            <label for="validationDefault04" class="form-label">Ciudad</label>
            <select class="form-select" id="ciudad" name="ciudad" required>
              <option selected value="<?php echo $row['ciudad'] ?>">-><?php echo $row['ciudad'] ?></option>
              <option value="Neiva">Neiva</option>
              <option value="Bogota">Bogotá</option>
              <option value="Campoalegre">Campoalegre</option>
              <option value="Yaguará">Yaguará</option>
              <option value="Rivera">Rivera</option>
            </select>
          </div>

        <div class="col-md-2">
          <label for="validationDefault02" class="form-label">Dirección</label>
          <input type="text" class="form-control" id="direccion" value="<?php echo $row['direccion'] ?>"  name="direccion" required  placeholder="Ingrese la dirección">
        </div>

        <div class="col-md-3">
          <label for="validationDefault03" class="form-label">Correo</label>
          <input type="text" class="form-control" id="correo" value="<?php echo $row['correo'] ?>" name="correo" required placeholder="Ingrese el correo elctrónico">
        </div>
        <div class="col-md-2">
          <label for="validationDefault04" class="form-label">Genero</label>
          <select class="form-select" id="genero" name="genero" required>
            <option selected  value="<?php echo $row['genero'] ?>">-><?php echo $row['genero'] ?></option>
            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>
          </select>
        </div>
        <div class="col-md-2">
          <label for="validationDefault04" class="form-label">Genero Favorito</label>
          <select class="form-select" id="favorito" name="favorito" required>
            <option selected  value="<?php echo $row['gen_favorito'] ?>">-><?php echo $row['gen_favorito'] ?></option>
            <option value="Drama">Drama</option>
            <option value="Terror">Terror</option>
            <option value="Ficcion">Ficcion</option>
            <option value="Romance">Romance</option>
          </select>
        </div>
        <div class="col-md-2">
          <label for="validationDefault04" class="form-label">Estado</label>
          <select class="form-select" id="estado" name="estado" required>
            <option selected  value="<?php echo $row['estado'] ?>">-><?php echo $row['estado'] ?></option>
            <option value="Activo">Activo</option>
            <option value="Inactivo">Inactivo</option>
          </select>
        </div>
        <div class="col-11">
            <br>
            <button id="boton"  class="btn btn-warning" onclick="Modificar()">Modificar</button>
            <button id="boton" type="reset" class="btn btn-primary">Restaurar</button>
        </div>
