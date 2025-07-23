<?php

namespace CoffeeHouse\Specialities;

use CoffeeHouse\Coffee;

class FlatWhite extends Coffee {

    function __construct()
    {
        parent::__construct(__CLASS__, 2, 27, 1, 0);
    }
}