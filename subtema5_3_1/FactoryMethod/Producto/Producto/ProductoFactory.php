<?php 
class ProductFactory {
    public static function createProduct($name) {
        return new Product($name);
    }
}