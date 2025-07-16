<?php

require_once 'Product.php';

class ShoppingCart {

    private $products = [];
    
    public function getProducts(): array
    {
        return $this->products;
    }

    public function addProduct(Product $product)
    {
        $this->products[] = $product;
    }

    public function list()
    {
        echo '<table><tr><th>Name</th><th>Anzahl</th><th>Preis</th></tr>';
        foreach($this->products as $product) {
            echo '<tr><td>'.$product->getName().'</td><td>'.$product->getQuantity().'</td><td>'.$product->getPrice().'</td></tr>';
        }
         echo '</table>';
    }

    public function sum(): float
    {
        $sum = 0;
        foreach($this->products as $product) {
            //$sum += $product->getQuantity() * $product->getPriceInklMwSt();
            $sum += $product->getGesamtPrice();
        }
        return $sum;
    }
}