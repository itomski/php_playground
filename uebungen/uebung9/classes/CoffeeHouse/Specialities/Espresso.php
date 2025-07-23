<?php

namespace CoffeeHouse\Specialities;

use CoffeeHouse\Coffee;

class Espresso extends Coffee {

    function __construct()
    {
        parent::__construct(__CLASS__, 1, 0, 0, 0);
    }
}