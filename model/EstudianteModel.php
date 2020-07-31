<?php

require_once 'baseDatos/conexion.php';
require_once 'Estudiante.php';


class EstudianteModel{
    private $bd;
    
    function __construct() {
        $this->bd = new ConexionBD();
    }


    public function listarEstudiantes(){
    $this->bd->getConeccion();
    $sql="SELECT * FROM ESTUDIANTES ";
    $registros =  $this->bd->executeQueryReturnData($sql);
    
    
    $this->bd->cerrarConeccion();
    $estudiantes = array();
    foreach ($registros as $row){
        $estudiante = new Estudiante($row['cedula'],$row['apellido'],['edad']);
        array_push($estudiantes, $estudiante);
    }
     return $estudiantes;
}
   
}

