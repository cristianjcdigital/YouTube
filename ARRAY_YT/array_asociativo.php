<?php
/**
 * Este archivo contiene un ejemplo de un array asociativo en PHP.
 * El array contiene información personal de una persona, como su nombre, apellido y edad.
 * Se utiliza la función print_r() para imprimir el contenido del array en pantalla.
 */

$array_asociativo = array(
    "nombre" => "Juan",
    "apellido" => "Pérez",
    "edad" => 30
);
print_r($array_asociativo);
echo "<hr>";
foreach ($array_asociativo as $key => $value ) {
    echo $key . $value."<br>";
}
echo "<hr>";
echo $array_asociativo["apellido"];

?>