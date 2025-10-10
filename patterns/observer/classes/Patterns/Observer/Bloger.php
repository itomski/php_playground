<?php

declare(strict_types = 1);

namespace Patterns\Observer;

use \SplObserver;
use \SplSubject;

class Bloger implements SplObserver {

    private string $name;
    private BlogerType $type;

    function __construct(string $name, BlogerType $type)
    {
        $this->name = $name;
        $this->type = $type;
    }

    public function update(SplSubject $subject): void {

        list($label, $msg) = explode(':', $subject->getMsg());
        if($label == $this->type->value || $this->type->value == 'a') {
            echo '<p>'.$this->name.' ich kümmere mich darum</p>';
        }
        else {
            echo '<p>'.$this->name.' das interessiert mich nicht</p>';
        }
    }
}