<?php 
/**
 * Este código muestra un ejemplo de un array multidimensional en PHP.
 * El array contiene tres elementos: "frutas", "números" y "colores".
 * Cada elemento es a su vez otro array que contiene diferentes valores.
 * El código utiliza la función print_r() para mostrar el contenido del array multidimensional.
 */

$array_multidimensional = array(
    "frutas" => array("manzana", "banana", "cereza"),
    "números" => array(1, 2, 3),
    "colores" => array("rojo", "verde", "azul")
);
print_r($array_multidimensional);
echo "<hr>";
foreach ($array_multidimensional as $key => $value) {
    echo $key. "<br>";
    foreach ($value as $key2 => $value2) {
        echo $key2. ": ".$value2."<br>";
    }
    
}
echo "<hr>";
echo $array_multidimensional["frutas"][0] . "<br>" . $array_multidimensional["números"][1] . "<br>" . $array_multidimensional["colores"][2];

?>