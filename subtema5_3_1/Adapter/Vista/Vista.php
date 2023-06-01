<?php
// Interfaz de la Vista
interface Vista {
    public function mostrar();
}
// Implementación de la Vista
class VistaConcreta implements Vista {
    public function mostrar() {
        echo "Mostrando la vista...\n";
    }
}