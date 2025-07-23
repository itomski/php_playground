<?php

namespace CoffeeHouse;

use CoffeeHouse\Specialities\Americano;
use CoffeeHouse\Specialities\Cappuccino;
use CoffeeHouse\Specialities\Espresso;
use CoffeeHouse\Specialities\FlatWhite;
use CoffeeHouse\Specialities\LatteMacchato;

enum Speciality {

    case AMERICANO;
    case CAPPUCCINO;
    case ESPRESSO;
    case FLAT_WHITE;
    case LATE_MACCHATO;

    public function get(): Coffee {

        return match($this) {
            self::AMERICANO => new Americano(),
            self::CAPPUCCINO => new Cappuccino(),
            self::ESPRESSO => new Espresso(),
            self::FLAT_WHITE => new FlatWhite(),
            self::LATE_MACCHATO => new LatteMacchato()
        };
    }
}