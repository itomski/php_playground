<?php

namespace CoffeeHouse;

abstract class Coffee {

    private $name;
    private $coffeeAmount;
    private $milkAmount;
    private $foamAmount;
    private $waterAmount;

    function __construct(string $name, int $coffeeAmount, int $milkAmount, int $foamAmount, int $waterAmount)
    {
        $slashPos = strrpos($name, '\\') + 1; // Suche das letze Vorkommen von BackSlash
        $this->name = substr($name, $slashPos); // Lese den Teilstring ab dem letzten Vorkommen des BackSlashs
        $this->coffeeAmount = $coffeeAmount;
        $this->milkAmount = $milkAmount;
        $this->foamAmount = $foamAmount;
        $this->waterAmount = $waterAmount;
    }

    function getName() { 
 		return $this->name; 
	} 

	function getCoffeeAmount() { 
 		return $this->coffeeAmount; 
	} 

	function getMilkAmount() { 
 		return $this->milkAmount; 
	}

    function getFoamAmount() { 
 		return $this->foamAmount;
	}

	function getWaterAmount() { 
 		return $this->waterAmount; 
	}
}