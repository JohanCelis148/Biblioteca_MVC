<?php

use LDAP\Result;

include '../../environment/conexion.php';
class personasM{

    private $id;
    private $nombres;
    private $apellidos;
    private $tipo;
    private $documento;
    private $telefono;
    private $ciudad;
    private $direccion;
    private $correo;
    private $genero;
    private $favorito;
    private $estado;

    function __construct(){}
    

    // Id
    public function setId($id){$this->id =$id;} 
    public function getId(){return $this->id;}

    // nombres
    public function setNombres($nombres){$this->nombres =$nombres;} 
    public function getNombres(){return $this->nombres;}

    // apellidos
    public function setApellidos($apellidos){$this->apellidos =$apellidos;} 
    public function getApellidos(){return $this->apellidos;}

    // tipo
    public function setTipo($tipo){$this->tipo =$tipo;} 
    public function getTipo(){return $this->tipo;}

    // documento
    public function setDocumento($documento){$this->documento =$documento;} 
    public function getDocumento(){return $this->documento;}

    // telefono
    public function setTelefono($telefono){$this->telefono =$telefono;} 
    public function getTelefono(){return $this->telefono;}

    // ciudad
    public function setCiudad($ciudad){$this->ciudad =$ciudad;} 
    public function getCiudad(){return $this->ciudad;}

    //direccion
    public function setDireccion($direccion){$this->direccion =$direccion;}
    public function getDireccion(){return $this->direccion;}

    //correo
    public function setCorreo($correo){$this->correo =$correo;}
    public function getCorreo(){return $this->correo;}

    //genero
    public function setGenero($genero){$this->genero =$genero;}
    public function getGenero(){return $this->genero;}
    
    //favorito
    public function setFavorito($favorito){$this->favorito =$favorito;}
    public function getFavorito(){return $this->favorito;}

    //estado
    public function setEstado($estado){$this->estado =$estado;}
    public function getEstado(){return $this->estado;}
    


    public function crear(){
        try{
            
            $conexion = new conexion();

            $sql="INSERT INTO personas (
                nombres,
                apellidos,
                tipo,
                documento,
                telefono,
                ciudad,
                direccion,
                correo,
                genero,
                gen_favorito,
                estado) 
            VALUES (
                '$this->nombres',
                '$this->apellidos',
                '$this->tipo',
                '$this->documento',
                '$this->telefono',
                '$this->ciudad',
                '$this->direccion',
                '$this->correo',
                '$this->genero',
                '$this->favorito',
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
            $sql="DELETE FROM personas WHERE id = '$this->id';";
            $conexion->ejecutar($sql);
            echo "Se eliminarón bien";
        } catch(Exception $e){
            echo "Ocurrio un error al eliminar";
        }    
    }

    public function modificar(){
        try{
            $conexion = new conexion();
            $sql="UPDATE personas SET 
                nombres = '$this->nombres',
                apellidos = '$this->apellidos',
                tipo = '$this->tipo',
                documento = '$this->documento',
                telefono = '$this->telefono',
                ciudad = '$this->ciudad',
                direccion = '$this->direccion',
                correo = '$this->correo',
                genero = '$this->genero',
                gen_favorito = '$this->favorito',
                estado = '$this->estado'
                WHERE id = '$this->id';";
            $conexion->ejecutar($sql);
            echo "Se modificaron bien";
        }catch(Exception $e){
            echo "Ocurrio un error al modificar";
        } 
    }

    public function consultar(){
        try{
            $conexion = new conexion();
            $query = "SELECT * FROM usuarios";
            $resultado = $conexion->query($query);
            echo "Se modificaron bien";
            return $resultado;
        }catch(Exception $e){
            echo "Ocurrio un error al modificar";
        } 
    }
}
