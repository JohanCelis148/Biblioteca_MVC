<?php

use LDAP\Result;

include '../../environment/conexion.php';
class usuariosM{

    private $id;
    private $personaId;
    private $usuario;
    private $contrasenia;
    private $rol;
    private $estado;

    function __construct(){}
    

    // Id
    public function setId($id){$this->id =$id;} 
    public function getId(){return $this->id;}

    // persona id
    public function setPersonaId($personaId){$this->personaId =$personaId;} 
    public function getPersonaId(){return $this->personaId;}

    // usuario
    public function setUsuario($usuario){$this->usuario =$usuario;} 
    public function getUsuario(){return $this->usuario;}

    // contrasenia
    public function setContrasenia($contrasenia){$this->contrasenia =$contrasenia;} 
    public function getContrasenia(){return $this->contrasenia;}

    // rol
    public function setRol($rol){$this->rol =$rol;} 
    public function getRol(){return $this->rol;}

    //estado
    public function setEstado($estado){$this->estado =$estado;}
    public function getEstado(){return $this->estado;}
    


    public function crear(){
      
        try{
            $conexion = new conexion();

            $sql="INSERT INTO usuarios (
                persona_id,
                usuario,
                contrasenia,
                rol,
                estado) 
            VALUES (
                '$this->personaId',
                '$this->usuario',
                '$this->contrasenia',
                '$this->rol',
                '$this->estado'
                );";
            $conexion->ejecutar($sql);
            echo "Se agregaron bien";
        }catch(Exception $e){
            echo "Ocurrio un error al crear";
        } 
    }

    public function eliminar(){

        try {
            //code...
            $conexion = new conexion();
            $sql="DELETE FROM usuarios WHERE id = '$this->id';";
            $conexion->ejecutar($sql);
            echo "Se eliminarón bien";
        } catch(Exception $e){
            echo "Ocurrio un error al eliminar";
        }    
    }

    public function modificar(){
        try{
            $conexion = new conexion();
            $sql="UPDATE usuarios SET 
                usuario = '$this->usuario',
                contrasenia = '$this->contrasenia',
                rol = '$this->rol',
                estado = '$this->estado'
                WHERE id = '$this->id';";
            $conexion->ejecutar($sql);
            echo "Se modificaron bien";
        }catch(Exception $e){
            echo "Ocurrio un error al modificar";
        } 
    }
}
