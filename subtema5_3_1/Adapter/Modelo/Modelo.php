<?php
// Interfaz del Modelo
interface Modelo {
    public function realizarOperacion();
}

// Implementación del Modelo
class ModeloConcreto implements Modelo {
    public function realizarOperacion() {
        echo "Realizando operación en el modelo...\n";
    }
}