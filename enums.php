<?php

enum Cup: int {
    case ESPRESSO_TASSE = 1;
    case KAFFEE_TASSE = 2;
    case GLAS1 = 3;
    case GLAS2 = 4;
}

class Coffee {

    private $cup;

    function __construct(Cup $cup)
    {
        $this->cup = $cup;
    }

    public function getCup()
    {
        return $this->cup;
    }
}


class Americano extends Coffee {

    function __construct()
    {
        parent::__construct(Cup::GLAS1);
    }
}

$c1 = new Americano();
echo $c1->getCup()->value;