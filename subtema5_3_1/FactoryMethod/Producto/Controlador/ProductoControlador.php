<?php
class ProductController {
    public function index() {
        // Lógica para obtener los datos del modelo (en este caso, una lista de productos)
        $product1 = ProductFactory::createProduct('Producto 1');
        $product2 = ProductFactory::createProduct('Producto 2');
        
        $products = [$product1, $product2];       
        // Cargar la vista
        require_once('index.php');
    }
}