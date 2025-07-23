<?php

namespace CoffeeHouse\Specialities;

use CoffeeHouse\Coffee;

class LatteMacchato extends Coffee {

    function __construct()
    {
        parent::__construct(__CLASS__, 1, 54, 2, 0);
    }
}