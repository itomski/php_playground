<?php

class Product {

    private $name;
    private $quantity;
    private $price;

    public function __construct(string $name, int $quantity, float $price)
    {
        $this->name = $name;
        $this->quantity = $quantity;
        $this->price = $price;
    }
 
    public function getName()
    {
        return $this->name;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function getPrice()
    {
        return $this->price;
    }

    // Vertuelles Attribut
    public function getPriceInklMwSt()
    {
        return $this->price * 1.19;
    }

    public function getGesamtPrice()
    {
        return $this->price * $this->quantity;
    }
}