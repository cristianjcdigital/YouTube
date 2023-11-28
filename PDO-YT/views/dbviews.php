<?php 
require('../model/dbmodel.php');
$p = new Dbmodel();
//$p->crearTable('usuarios');
//$p->actualizarDatos('datos', 'paloma');
//$p->eliminarDatos();

//$p->insertarDatos(1,'juan', 'perez', 'juan@perez.com');
$p->verDatos();


?>