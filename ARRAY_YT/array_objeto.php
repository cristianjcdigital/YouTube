<?php
class Persona {
    public $nombre;
    public $apellido;
    public $edad;

    public function __construct($nombre, $apellido, $edad) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
    }
}

$persona = new Persona("Juan", "Pérez", 30);
print_r($persona);
?>