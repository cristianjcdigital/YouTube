<?php 
require_once('../model/dbmodel.php');

/**
 * Este código verifica si se ha enviado el formulario de registro y realiza las siguientes acciones:
 * - Comprueba si se han enviado los campos 'name' y 'pass' en el formulario.
 * - Verifica si los campos 'name' y 'pass' tienen valores asignados.
 * - Crea una instancia de la clase 'dbmodel' para realizar operaciones en la base de datos.
 * - Comprueba si ya existe un registro con el mismo nombre y contraseña en la base de datos.
 *   - Si existe, redirige a la página 'formulario.php' con el parámetro de error '3'.
 * - Inserta un nuevo registro en la base de datos con el nombre y contraseña proporcionados.
 * 
 * @param string $_POST['name'] El nombre enviado en el formulario de registro.
 * @param string $_POST['pass'] La contraseña enviada en el formulario de registro.
 * @return void
 */
// comprobar si se ha enviado el formulario de registro
if (isset($_POST['name']) && isset($_POST['pass'])) {
    if ($_POST['name'] && $_POST['pass'] ) {
        $insertar_usuario = new dbmodel();
        if ($insertar_usuario->obtenerRegistro($_POST['name'], $_POST['pass'])) {
            header('Location: ../views/formulario.php?error=4');
        }else{ 
            $resultado = $insertar_usuario->insertarRegistro($_POST['name'], $_POST['pass']);
            header('Location: ../views/panel.php');
        }
    
    }else{
        header('Location: ../views/formulario.php?error=6');
    }
    
}


/**
 * Comprueba si se ha enviado el formulario de login y realiza las acciones correspondientes.
 * Si los campos 'nombre' y 'pwd' están definidos y no están vacíos, se consulta la base de datos para obtener el registro del usuario.
 * Si se encuentra un resultado, redirige al panel de control.
 * Si no se encuentra un resultado, redirige al formulario de login con un código de error.
 * Si alguno de los campos está vacío, redirige al formulario de login con un código de error.
 */
if (isset($_POST['nombre']) && isset($_POST['pwd'])) {
    if ($_POST['nombre'] && $_POST['pwd']) {
        $consultar_usuario = new dbmodel();
        $resultado = $consultar_usuario->obtenerRegistro($_POST['nombre'], $_POST['pwd']);
        if ($resultado) {
            header('Location: ../views/panel.php');
        } else {
            header('Location: ../views/formulario.php?error=2');
            //header('Location: ../views/error_registro.php');
        }
    } else {
        header('Location: ../views/formulario.php?error=1');
    }
}


?>