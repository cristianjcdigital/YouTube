<?php 

/**
 * Función para establecer una conexión a la base de datos.
 *
 * @return PDO La conexión establecida.
 */
function conexion(){
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    
    try {
        $conn = new PDO("mysql:host=$host;dbname=scraper", $user, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conexion exitosa";
    } catch (PDOException $e) {
        echo "Error a la conexión con la base de datos: " . $e->getMessage();
        
    }
    return $conn;
}

?>