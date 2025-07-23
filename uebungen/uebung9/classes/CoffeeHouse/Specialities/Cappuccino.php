<?php

namespace CoffeeHouse\Specialities;

use CoffeeHouse\Coffee;

class Cappuccino extends Coffee {

    function __construct()
    {
        parent::__construct(__CLASS__, 1, 54, 1, 0);
    }
}