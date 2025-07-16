<?php

require_once 'Product.php';

class ProductDTO {

    private $name;
    private $quantity;
    private $price;
    private $error = false;


    public function __construct(array $data)
    {
        // Validieren
        $this->name = strip_tags($data['name'] ?? '');
        $this->quantity = $data['quantity'] ?? 0;
        $this->price = $this->priceToFloat($data['price']) ?? 0.0;
    }

    function toProduct(): Product {
        return new Product($this->name, $this->quantity, $this->price);
    }

    private function priceToFloat($price) : float {
        return str_replace(',', '.', $price);
    }
}