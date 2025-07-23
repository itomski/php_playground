<?php

namespace CoffeeHouse;

abstract class Coffee {

    private $coffeeAmount;
    private $milkAmount;
    private $waterAmount;

    function __construct(int $coffeeAmount, int $milkAmount, int $waterAmount)
    {
        $this->coffeeAmount = $coffeeAmount;
        $this->milkAmount = $milkAmount;
        $this->waterAmount = $waterAmount;
    }

	function getCoffeeAmount() { 
 		return $this->coffeeAmount; 
	} 

	function getMilkAmount() { 
 		return $this->milkAmount; 
	} 

	function getWaterAmount() { 
 		return $this->waterAmount; 
	}
	
}