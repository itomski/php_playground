<?php

declare(strict_types = 1);

namespace Patterns\Observer;

use \SplObserver;
use \SplSubject;

class Hund implements SplObserver {

    private string $name;
    
    function __construct(string $name)
    {
        $this->name = $name;
    }

    public function update(SplSubject $subject): void {

        echo '<p>'.$this->name.': Wau wau!';
    }
}