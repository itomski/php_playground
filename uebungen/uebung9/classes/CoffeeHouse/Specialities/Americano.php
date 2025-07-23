<?php

namespace CoffeeHouse\Specialities;

use CoffeeHouse\Coffee; // Klassen aus einem anderen Namespace müssen mit use importiert werden

class Americano extends Coffee {

    function __construct()
    {
        parent::__construct(__CLASS__, 1, 0, 0, 180);
    }
}