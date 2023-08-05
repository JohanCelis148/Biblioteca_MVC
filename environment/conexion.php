<?php

class conexion{

    private $valores = array();
    private $recordSet = null;

    //valores
    public function setValores ($valores){$this->valores =$valores;} 
    public function getValores(){return $this->valores;}

    public function ejecutar($sql){
        $con = mysqli_connect('localhost','root','','practica');
        mysqli_query($con, $sql);
        mysqli_close($con);
    }

    public function ejecutarConsulta($sql){
        $con = mysqli_connect('localhost','root','','practica');
         $resultados = mysqli_query($con, $sql);
        while($consulta = mysqli_fetch_array($resultados)){
            $this->valores['nombres'] = $consulta['nombres'];
        }
        mysqli_close($con);
    }

    public function ObtenerRegistros(){
        return mysqli_fetch_all($this->recordSet);
    }


}
?>