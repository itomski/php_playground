<?php

class Memo implements Printable {

    private string $content;

    function __construct(string $content)
    {
        $this->content = $content;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function print() {
        echo '<p>'.$this->content.'</p>';
    }
}