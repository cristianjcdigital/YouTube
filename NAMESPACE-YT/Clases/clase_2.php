<?php 
namespace NameSpace_YT\Clases;

class Prueba3{
    public function __construct(){
        echo "Hola desde el 3.php";
        echo "<br>";
    }

    public function resta($a,$b )
    {
        return $a-$b;
    }

    public function multiplicacion($a,$b )
    {
        return $a*$b;
    }

    public function division($a,$b )
    {
        return $a/$b;
    }
}

?>