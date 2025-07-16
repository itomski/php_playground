<?php

class Box {

    private $content;

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }
}

class Content {

    private $text;

    private $createdAt;

    public function __construct(string $text)
    {
        $this->text = $text;
        $this->createdAt = time();
    }

    // Nur lesend 
    public function getText()
    {
        return $this->text;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }
}