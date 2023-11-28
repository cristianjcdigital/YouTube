<?php 
/**
 * Este archivo representa el modelo de base de datos para la aplicación.
 * Contiene métodos para crear tablas, ver datos, actualizar datos, eliminar datos e insertar datos.
 * La clase Dbmodel utiliza una conexión a la base de datos obtenida de la función conexion() en el archivo ../controller/conexion.php.
 */


require('../controller/conexion.php');

class Dbmodel{
    private $db;

    /**
     * Constructor de la clase Dbmodel.
     * Inicializa la conexión a la base de datos utilizando la función conexion().
     */
    public function __construct()
    {
        $this->db= conexion();
    }

    /**
     * Crea una tabla en la base de datos.
     * @param string $table Nombre de la tabla a crear.
     */
    public function crearTable($table)
    {
        try {
            $sql = "CREATE TABLE $table(
                id INT(6),
                firstname VARCHAR(30) NOT NULL,
                lastname VARCHAR(30) NOT NULL,
                email VARCHAR(50)
            )";
            $result = $this->db->exec($sql);
            if ($result !== false) {
                echo "<hr>Tabla $table creada exitosamente";
            }else{
                echo "Error al crear la tabla $table";
            }
        } catch (PDOException $e) {
            echo "Error al crear la tabla $table: " . $e->getMessage();
        }
    }

    /**
     * Obtiene y muestra los datos de la tabla "datos".
     */
    public function verDatos()
    {
        $sql = "SELECT * FROM datos";
        $result = $this->db->query($sql);
        $datos = $result->fetchAll();
        echo "<br>";
        //print_r($datos);
        echo "<br><hr>";
        foreach ($datos as $key => $value) {
            echo $value['id']."<br>";
            echo $value['h1']."<br>";
            echo $value['h2']."<br>";
            echo "IMG. ".$value['img']."<br>";
            echo "Fecha scraping: ".$value['fecha_scraping']."<br>";
            echo "<hr>";
        }
    }

    /**
     * Actualiza los datos de la tabla especificada.
     * @param string $table Nombre de la tabla a actualizar.
     */
    public function actualizarDatos($table)
    {
        try {
            $sql = "UPDATE $table SET h1 = 'Pájaro' WHERE id = 2";
            $result = $this->db->exec($sql);
            echo "<br>Datos actualizados exitosamente";
        } catch (PDOException $e) {
            echo "Error al actualizar los datos debido a la sentencia SQL".$table.": " . $e->getMessage();
        }
    }

    /**
     * Elimina los datos de la tabla "datos".
     */
    public function eliminarDatos()
    {
        try {
            $sql = "DELETE FROM datos WHERE id = 2";
            $result = $this->db->exec($sql);
            echo "<br>Datos eliminados exitosamente";
        } catch (PDOException $e) {
            echo "Error al eliminar los datos debido a la sentencia SQL: " . $e->getMessage();
        }
    }

    /**
     * Inserta datos en la tabla especificada.
     * @param int $id ID del usuario a insertar.
     * @param string $firstname Nombre del usuario a insertar.
     * @param string $lastname Apellido del usuario a insertar.
     * @param string $email Email del usuario a insertar.
     */
    public function insertarDatos($id, $firstname, $lastname, $email)
    {
        $table = "usuarios";
        try {
            $sql = "INSERT INTO $table (id, firstname, lastname, email) VALUES (:id, :firstname, :lastname, :email)";
            $result = $this->db->prepare($sql);
            $result->execute(array(':id'=>$id, ':firstname'=>$firstname, ':lastname'=>$lastname, ':email'=>$email));
            echo "<br>Datos insertados exitosamente";
        } catch (PDOException $e) {
            echo "Error al insertar los datos debido a la sentencia SQL: ".$sql ."para la tabla ".$table. $e->getMessage();
        }
    }
}




?>