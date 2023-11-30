<?php
require('../controller/conexionbd.php');

class dbmodel{

    private $conexion;
    public function __construct()
    {
        $this->conexion = conectar();
        
        
    }

    // Función para insertar un registro
    public function insertarRegistro($nombre, $pwd) {

        $sql = "INSERT INTO usuarios (nombre, pwd) VALUES ('$nombre', '$pwd')";
        // Ejecuta la consulta y lo guarda en la variable resultado
        $insertar_datos = $this->conexion->query($sql); 
        $resultado = $insertar_datos->fetch(PDO::FETCH_DEFAULT);
        return $resultado;
    }
    
    // Función para obtener un registro
    public function obtenerRegistro($nombre, $pwd) {

        $sql = "SELECT * FROM usuarios WHERE nombre = '$nombre' AND pwd = '$pwd'";
        
        $consultar_datos = $this->conexion->query($sql); 
        $resultado = $consultar_datos->fetch(PDO::FETCH_DEFAULT);
        return $resultado;
       // print_r($resultado);
        //echo $resultado['nombre'];      
    }
}


?>

