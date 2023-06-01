<?php
// Cliente
class Controlador {
    private $vista;

    public function __construct(Vista $vista) {
        $this->vista = $vista;
    }
    public function ejecutar() {
        $this->vista->mostrar();
    }
}