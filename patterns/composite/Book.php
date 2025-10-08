<?php

class Book implements Printable {

    private string $title;

    private string $author;

    private array $pages = [];

    function __construct(string $title, string $author)
    {
        $this->title = $title;
        $this->author = $author;
    }

    public function addPage(string $page)
    {
        $this->pages[] = $page;
    }

    public function print() {
        foreach($this->pages as $page) {
            echo '<p>'.$page.'</p>';
        }
    }
}