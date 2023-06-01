<?php 
// Adaptador para conectar el Modelo con la Vista
class AdaptadorModeloVista implements Vista {
    private $modelo;

    public function __construct(Modelo $modelo) {
        $this->modelo = $modelo;
    }

    public function mostrar() {
        $this->modelo->realizarOperacion();
    }
}
