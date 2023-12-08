<?php 
include ('..\NameSpace_YT\Clases\clase_1.php');
include ('..\NameSpace_YT\Clases\clase_2.php');
/**
 * Importa la clase Prueba3 del espacio de nombres NameSpace_YT\Clases.
 */
use NameSpace_YT\Clases\Prueba3;


/**
 * Este código crea instancias de las clases Prueba1 y Prueba3 y llama a varios métodos en ellas.
 * 
 * - La variable $a crea una instancia de la clase Prueba1 del espacio de nombres NameSpace_YT.
 *   Se llama al método suma(1,2) y se imprime el resultado.
 *   Se llama al método resta(1,2) y se imprime el resultado.
 * 
 * - La variable $b crea una instancia de la clase Prueba3.
 *   Se llama al método resta(1,2) y se imprime el resultado.
 *   Se llama al método multiplicacion(1,2) y se imprime el resultado.
 *   Se llama al método division(1,2) y se imprime el resultado.
 */
$a = new NameSpace_YT\Clases\Prueba1();
print($a->suma(1,2));
print($a->resta(1,2)); 

$b = new Prueba3();
print($b->resta(1,3));
print($b->multiplicacion(1,2));
print($b->division(1,2));








?>