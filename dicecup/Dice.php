<?php

require_once 'Faces.php';

class Dice {

    private $faces;

    public function __construct(Faces $faces)
    {
        $this->faces = $faces;
    }

    public function roll(): int {
        return rand(1, $this->faces->get());
    }
}