<?php

require_once 'Dice.php';

class DiceCup {

    private $dice;

    public function __construct(Dice $dice)
    {
        $this->dice = $dice;
    }

    public function changeDice(Dice $dice) 
    {
        $this->dice = $dice;
    }

    public function roll(int $count): array {

        $results = [];
        for($i=0; $i < $count; $i++) { 
            $results[] = $this->dice->roll();
        }
        return $results;
    }
}
