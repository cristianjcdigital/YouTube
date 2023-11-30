<?php 

// Conexión a la base de datos

    function conectar()
    {
        $dsn = 'mysql:host=localhost;dbname=form';
        $usuario = 'root';
        $contraseña = '';
        
        try {
            $conexion = new PDO($dsn, $usuario, $contraseña);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        } catch (PDOException $e) {
            echo 'Error al conectar a la base de datos: ' . $e->getMessage();
        }
        return $conexion;
    }






?>