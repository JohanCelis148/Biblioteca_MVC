<?php
include '../../model/seguridad/UsuariosM.php';

$action = $_POST['boton'];
$id = $_POST['id'];
$personaId = $_POST['personaId'];
$usuario = $_POST['usuario'];
$contrasenia = $_POST['contrasenia'];
$rol = $_POST['rol'];
$estado = $_POST['estado'];
$valores = array();

if (isset($action)) {
    $usuarios = new usuariosM();
    switch ($action) {
        case 'Registrar':
            $usuarios->setPersonaId($personaId);
            $usuarios->setUsuario($usuario);
            $usuarios->setContrasenia($contrasenia);
            $usuarios->setRol($rol);
            $usuarios->setEstado($estado);
            $usuarios->crear();
            break;

        case 'Eliminar':
            $usuarios->setId($id);
            $usuarios->eliminar();
            break;
            
        case 'Modificar':
            $usuarios->setId($id);
            $usuarios->setPersonaId($personaId);
            $usuarios->setUsuario($usuario);
            $usuarios->setContrasenia($contrasenia);
            $usuarios->setRol($rol);
            $usuarios->setEstado($estado);
            $usuarios->modificar();
            break;
    }
}

?>
