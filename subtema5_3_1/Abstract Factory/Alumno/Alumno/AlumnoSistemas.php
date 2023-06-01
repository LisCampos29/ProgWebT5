<?php
// Implementación del producto Alumno de Sistemas OPerativos
class AlumnoSistemas implements Alumno {
    private $nombre;
    private $grado;

    public function __construct($nombre, $grado) {
        $this->nombre = $nombre;
        $this->grado = $grado;
    }

    public function mostrarInformacion() {
        echo "Alumno de sistemas operativos:" . PHP_EOL;
        echo "Nombre: " . $this->nombre . PHP_EOL;
        echo "Grado: " . $this->grado . PHP_EOL;
    }
}