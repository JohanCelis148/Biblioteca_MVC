<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../../js/seguridad/personas.js"></script>
    <script src="../../asset/library/node_modules/jquery/dist/jquery.js"></script>
    <link rel="stylesheet" href="../../asset/library/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel="stylesheet" href="../../asset/css/view/seguridad/personas.css">
    <title>Personas</title>
</head>
<body>
    <br><br><br><br>
    <h3 class="titulo">Registro Personas</h3>
    <br><br>

  <!-- formulario de registro -->

    <form class="row g-3" class="form">
        <div class="col-md-2">
          <label for="validationDefault01" class="form-label">Nombres</label>
          <input type="text" class="form-control" id="nombres" name="nombres" required placeholder="Ingrese el nombre">
        </div>
        <div class="col-md-2">
          <label for="validationDefault01" class="form-label">Apellidos</label>
          <input type="text" class="form-control" id="apellidos"  name="apellidos" required  placeholder="Ingrese el apellido">
        </div>

        <div class="col-md-1">
            <label for="validationDefault04" class="form-label">Tipo</label>
            <select class="form-select" id="tipo" name="tipo" required>
              <option selected disabled value="">-Seleccione-</option>
              <option value="TI">TI</option>
              <option value="CC">CC</option>
            </select>
          </div>
        
        <div class="col-md-2">
          <label for="validationDefault02" class="form-label">Numero Documento</label>
          <input type="text" class="form-control" id="documento"  name="documento" required  placeholder="Ingrese el documento">
        </div>
        <div class="col-md-2">
          <label for="validationDefault02" class="form-label">Teléfono</label>
          <input type="text" class="form-control" id="telefono"   name="telefono" required placeholder="Ingrese el telefono">
        </div>

        <div class="col-md-2">
            <label for="validationDefault04" class="form-label">Ciudad</label>
            <select class="form-select" id="ciudad" name="ciudad" required>
              <option selected disabled value="">--- Seleccione ---</option>
              <option value="Neiva">Neiva</option>
              <option value="Bogota">Bogotá</option>
              <option value="Campoalegre">Campoalegre</option>
              <option value="Yaguará">Yaguará</option>
              <option value="Rivera">Rivera</option>
            </select>
          </div>

        <div class="col-md-2">
          <label for="validationDefault02" class="form-label">Dirección</label>
          <input type="text" class="form-control" id="direccion"  name="direccion" required  placeholder="Ingrese la dirección">
        </div>

        <div class="col-md-3">
          <label for="validationDefault03" class="form-label">Correo</label>
          <input type="text" class="form-control" id="correo"  name="correo" required placeholder="Ingrese el correo elctrónico">
        </div>
        <div class="col-md-2">
          <label for="validationDefault04" class="form-label">Genero</label>
          <select class="form-select" id="genero" name="genero" required>
            <option selected disabled>--- Seleccione ---</option>
            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>
          </select>
        </div>
        <div class="col-md-2">
          <label for="validationDefault04" class="form-label">Genero Favorito</label>
          <select class="form-select" id="favorito" name="favorito" required>
            <option selected disabled>--- Seleccione ---</option>
            <option value="Drama">Drama</option>
            <option value="Terror">Terror</option>
            <option value="Ficcion">Ficcion</option>
            <option value="Romance">Romance</option>
          </select>
        </div>
        <div class="col-md-2">
          <label for="validationDefault04" class="form-label">Estado</label>
          <select class="form-select" id="estado" name="estado" required>
            <option selected disabled>--- Seleccione ---</option>
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
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Tipo</th>
                <th scope="col">Documento</th>
                <th scope="col">Telefono</th>
                <th scope="col">Ciudad</th>
                <th scope="col">Direccion</th>
                <th scope="col">Correo electrónico</th>
                <th scope="col">Genero</th>
                <th scope="col">Genero Favorito</th>
                <th scope="col">Estado</th>
                <th scope="col" colspan="2">Funciones</th>
              </tr>
            </thead>
            <tbody id="dataResult">
                <!-- data de la base de datos -->
            </tbody>
          </table>
        </div>

      </form>

      <style>
        
      </style>
</body>
</html>