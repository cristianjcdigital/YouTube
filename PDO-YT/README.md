# Conexión CRUD mediante PDO en PHP

## Descripción

Este proyecto es una aplicación web que utiliza PHP para interactuar con una base de datos.

## Código

El archivo `dbviews.php` es un script PHP que interactúa con la base de datos. Aquí está una explicación de las líneas 1 a 10:

```php
<?php 
require('../model/dbmodel.php'); // Importa el modelo de base de datos
$p = new Dbmodel(); // Crea una nueva instancia del modelo de base de datos

// Las siguientes líneas están comentadas, pero muestran diferentes operaciones que puedes realizar con la base de datos:

// $p->crearTabla(); // Crea una nueva tabla
$p -> verDatos(); // Muestra los datos
// $p->actualizarDatos(); // Actualiza los datos
// $p-> verDatos(); // Muestra los datos
// $p->eliminarDatos() // Elimina los datos
// $p->insertarDatos('1','cristian','rodriguez','cristian@cristian.com'); // Inserta nuevos datos
?>
```
Cada una de estas operaciones es una función definida en el modelo de base de datos (Dbmodel).
## Función de conexión a la base de datos

El archivo `conexion.php` contiene la función de conexión a la base de datos. Aquí está el código:
```php
<?php 
function conexion(){
    $host = "localhost";
    $user = "root";
    $pass = "";
    try {
        $conn = new PDO("mysql:host=$host;dbname=scraper", $user, $pass);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conectado CORRECTAMENTE<hr>";
    } catch(PDOException $e) {
        echo "Conexión FALLIDA: " . $e->getMessage();
    }
    return $conn;
}
?>
```
Esta función establece una conexión con la base de datos utilizando PDO (PHP Data Objects). Si la conexión es exitosa, imprime "Conectado CORRECTAMENTE", de lo contrario, imprime "Conexión FALLIDA" junto con el mensaje de error.
## Archivo `dbmodel.php`

El archivo `dbmodel.php` es un script PHP que define el modelo de la base de datos para la aplicación. Este archivo es crucial para el funcionamiento de la aplicación, ya que define las operaciones de base de datos que se pueden realizar.

El archivo `dbmodel.php` define una clase `Dbmodel` que contiene métodos para realizar operaciones de base de datos como crear tablas, ver datos, actualizar datos, eliminar datos e insertar datos. Cada uno de estos métodos se puede llamar desde otros scripts PHP, como se muestra en el archivo `dbviews.php`.

Aquí está un ejemplo de cómo podría verse el archivo `dbmodel.php`:

```php
<?php 
class Dbmodel {
    // Conexión a la base de datos
    private $conn;

    // Constructor
    public function __construct() {
        $this->conn = conexion();
    }

    // Método para crear una tabla
    public function crearTabla() {
        // Código para crear una tabla
    }

    // Método para ver datos
    public function verDatos() {
        // Código para ver datos
    }

    // Método para actualizar datos
    public function actualizarDatos() {
        // Código para actualizar datos
    }

    // Método para eliminar datos
    public function eliminarDatos() {
        // Código para eliminar datos
    }

    // Método para insertar datos
    public function insertarDatos($id, $nombre, $apellido, $email) {
        // Código para insertar datos
    }
}
?>
```
## Conclusión

Este proyecto es una aplicación web que utiliza PHP para interactuar con una base de datos. Con archivos como `dbviews.php` y `dbmodel.php`, el proyecto puede realizar una variedad de operaciones de base de datos, lo que lo hace flexible y adaptable a una variedad de necesidades.

El archivo `conexion.php` permite una conexión segura y eficiente a la base de datos, lo que garantiza que las operaciones de base de datos se realicen de manera eficiente.

En resumen, este proyecto es un excelente ejemplo de cómo se puede utilizar PHP para crear una aplicación web interactiva y dinámica. Esperamos que este proyecto sirva como un recurso útil para aquellos interesados en aprender más sobre el desarrollo de aplicaciones web con PHP.

## Contacto:
[![Email](https://img.shields.io/badge/cristian@jcdigital.es-email_personal-D14836?style=for-the-badge&logo=gmail&logoColor=white&labelColor=101010)](mailto:cristianjc@jcdigital.es)
<br>
[![Telegram](https://img.shields.io/badge/Telegram-Cristian-2CA5E0?style=for-the-badge&logo=telegram&logoColor=white&labelColor=101010)](https://t.me/cristianmartinezgil)
<br>
[![LinkedIn](https://img.shields.io/badge/LinkedIn-cristian|jcdigital-0077B5?style=for-the-badge&logo=linkedin&logoColor=white&labelColor=101010)](https://www.linkedin.com/in/cristianjcdigital)
</br>
[![Link](https://img.shields.io/badge/Link_Site-jcdigital.es-39E09B?style=for-the-badge&logo=Linktree&logoColor=white&labelColor=101010)](https://jcdigital.es)
