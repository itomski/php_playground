<?php

// Gruppe implementiert das gleiche Interface, wie die einzelnen Elemente der Gruppe
class PrintGroup implements Printable {

    private array $elements;

    public function __construct(Printable... $elements)
    {
        $this->elements = $elements;
    }

    public function add(Printable $element)
    {
        $this->elements[] = $element;
    }

    public function print()
    {
        foreach($this->elements as $element) {
            $element->print();
        }
    }
}