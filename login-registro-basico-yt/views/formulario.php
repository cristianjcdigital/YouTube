<?php
/**
* Este archivo representa la vista para los formularios de registro e inicio de sesión.
* Incluye el marcado HTML para los formularios y maneja los mensajes de error.
* Los formularios se envían al archivo "../controller/funciones.php".
*/

require_once('header.php');
?>


<body class="body_error">

<div class="container">
  <div class="row">
    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
      <div class="card card-signin my-5">
        <div class="card-body">
          <h5 class="card-title text-center">Registro</h5>
          <form action="../controller/funciones.php" method="POST" class="form-signin">
            <div class="form-label-group">
              <input type="text" id="inputName" class="form-control" name="name" autofocus>
              <label for="inputName" name="name">Nombre</label>
            </div>
            <div class="form-label-group">
              <input type="password" id="inputPassword" class="form-control" name="pass">
              <label for="inputPassword" name="pass">Contraseña</label>
            </div>
            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Enviar</button>
            <hr class="my-4">
          </form>
          <?php
          /**
          * Este bloque de código muestra mensajes de error basados en el valor del parámetro "error" en la URL.
          * Si el parámetro "error" está establecido en 4, muestra un mensaje indicando que el usuario ha sido
          registrado y debe acceder a través del panel de inicio de sesión.
          * Si el parámetro "error" está establecido en 6, muestra un mensaje indicando que hubo un error al registrar
          al usuario.
          */
          
          // Mostrar errores
          if (isset($_GET["error"])) {
            if ($_GET["error"] == 4) {
              echo " <h2 class='user_pass_e'>Usuario registrado, ¡Accede a través del panel de LOGIN!</h2>";
            } elseif ($_GET["error"] == 6) {
              echo "<h2 class='user_pass_e'>Error al registrar el usuario</h2>";
            }
          }
          ?>
        </div>

      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
      <div class="card card-signin my-5">
        <div class="card-body">
          <h5 class="card-title text-center">Inicio de Sesión</h5>
          <form action="../controller/funciones.php" method="POST" class="form-signin">
            <div class="form-label-group">
              <input type="text" id="inputName" class="form-control" name="nombre" autofocus>
              <label for="inputName" name="nombre">Nombre</label>
            </div>

            <div class="form-label-group">
              <input type="password" id="inputPassword" class="form-control" name="pwd">
              <label for="inputPassword" name="pwd">Contraseña</label>
            </div>
            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Enviar</button>
            <hr class="my-4">
          </form>
          <?php
          /**
           * Muestra mensajes de error según el valor de la variable $_GET["error"].
           * 
           * Si el valor de $_GET["error"] es 1, muestra el mensaje "Debes estar registrado para acceder al panel".
           * Si el valor de $_GET["error"] es 2, muestra el mensaje "Usuario o contraseña incorrectos".
           */
          if (isset($_GET["error"])) {
            if ($_GET["error"] == 1) {
              echo " <h2 class='user_pass_e'>Debes estar registrado para acceder al panel</h2>";
            } elseif ($_GET["error"] == 2) {
              echo "<h2 class='user_pass_e'>Usuario o contraseña incorrectos</h2>";
            }
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</div>
</body>

</html>