<?php
include '../../model/seguridad/PersonasM.php';

$action = $_POST['boton'];
$id = $_POST['id'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$tipo = $_POST['tipo'];
$documento = $_POST['documento'];
$telefono = $_POST['telefono'];
$ciudad = $_POST['ciudad'];
$direccion = $_POST['direccion'];
$correo = $_POST['correo'];
$genero = $_POST['genero'];
$favorito = $_POST['favorito'];
$estado = $_POST['estado'];
$valores = array();



if (isset($action)) {
    $personas = new personasM();
    switch ($action) {
        case 'Registrar':
            $personas->setNombres($nombres);
            $personas->setApellidos($apellidos);
            $personas->setTipo($tipo);
            $personas->setDocumento($documento);
            $personas->setTelefono($telefono);
            $personas->setCiudad($ciudad);
            $personas->setDireccion($direccion);
            $personas->setCorreo($correo);
            $personas->setGenero($genero);
            $personas->setFavorito($favorito);
            $personas->setEstado($estado);
            $personas->crear();
            break;

        case 'Eliminar':
            $personas->setId($id);
            $personas->eliminar();
            break;

        case 'Modificar':
            $personas->setId($id);
            $personas->setNombres($nombres);
            $personas->setApellidos($apellidos);
            $personas->setTipo($tipo);
            $personas->setDocumento($documento);
            $personas->setTelefono($telefono);
            $personas->setCiudad($ciudad);
            $personas->setDireccion($direccion);
            $personas->setCorreo($correo);
            $personas->setGenero($genero);
            $personas->setFavorito($favorito);
            $personas->setEstado($estado);
            $personas->modificar();
            break;
        case 'Consultar':
            try {
                $personas->consultar();
                if (isset($personas)) {
                    $retorno = "<table>";
                    while ($row = $resultado->fetch_assoc()) {
                        $retorno .= "<tr>
                                <td><label>" . $row['nombres']. "</label></td> 
                                <td><label>" .  $row['apellidos']. "</label></td>                                                                                               
                                <td><a class='editar'  href='funciones/modificarpersona.php?id=".  $row['id']."<i class='fi fi-rr-pencil'></i></a></td>
                                <td><button id='boton' class='btn btn-danger' onclick='Eliminar('".  $row['id']."');'><i class='fi fi-rr-trash'></i></button></td>
                            </tr>";
                    }

                    $retorno .= "</table>";
                    $valores['tablaRegistro'] = $retorno;
                } else {
                    $valores['tablaRegistro'] = 'No existen datos!!!';
                }
            } catch (Exception $e) {
                $valores['respuesta'] = "Error, no fué posible consultar la información, consulte con el administrador.";
            }
            $valores['accion'] = 'Consultar';
            echo json_encode($valores);
    }
}

?>