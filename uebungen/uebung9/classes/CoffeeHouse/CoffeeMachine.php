<?php

namespace CoffeeHouse;

use CoffeeHouse\Speciality;

class CoffeeMachine {

    private $beans = 1000;
    private $milk = 1000;
    private $water = 5000;

    public function brew(Speciality $spec): string {

        $coffee = $spec->get();
        $this->beans -= $coffee->getCoffeeAmount() * 9;
        $this->milk -= $coffee->getMilkAmount();
        $this->milk -= $coffee->getFoamAmount() * 25;
        $this->water -= $coffee->getCoffeeAmount() * 25;
        $this->water -= $coffee->getWaterAmount();
        return 'Es wird '.$coffee->getName().' zubereitet';
    }
}