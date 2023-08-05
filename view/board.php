<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/css/board.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row1">
            <div class="col">
                <?php
                    $conexion = mysqli_connect("localhost" , "root" , "" , "practica") or die ("Error");
                    $query = "SELECT count(id) quantity FROM personas";
                    $resultado = $conexion->query($query);
                    while($row = $resultado->fetch_assoc()){
                ?>
                <label for="">Personas Registradas</label>
                <h1><?php echo $row['quantity'] ?></h1>
                <?php
                    }
                ?>
            </div>
            <div class="col">
                <?php
                    $conexion = mysqli_connect("localhost" , "root" , "" , "practica") or die ("Error");
                    $query = "SELECT count(id) quantity FROM usuarios";
                    $resultado = $conexion->query($query);
                    while($row = $resultado->fetch_assoc()){
                ?>
                <label for="">Usuarios Activos</label>
                <h1><?php echo $row['quantity'] ?></h1>
                <?php
                    }
                ?>
            </div>
            <div class="col">
                <label for="">Ventas Realizadas</label>
                <h1>3</h1>
            </div>
            <div class="col">
                <label for="">Prestamos</label>
                <h1>14</h1>
            </div>
            <div class="col">
                <label for="">Libros Registrados</label>
                <h1>10</h1>
            </div>
        </div>
    </div>
</body>
</html>