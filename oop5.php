<?php

class Box {

    private $content;

    public function getContent(): Content
    {
        return $this->content;
    }

    // Kann das Attribut auch nachträglich ändern
    public function setContent(Content $content)
    {
        $this->content = $content;
    }

    public function cutInParts(): array
    {
        // $this->content ist das Content Objekt
        // $this->content->getText() ist der string im Content
        // return explode(' ', $this->content->getText()); // Zelegt nach Leerzeichen
        return str_split($this->content->getText()); // Zerlegt in einzelene Buchstaben
    }
}

class Content {

    private $text;

    private $createdAt;

    // Wird einmalig beim erzeugen des Objektes ausgeführt
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

$content = new Content('Das ist mein Text');
$box = new Box();
$box->setContent($content); // Objekte werden als Referenzen weitergegeben
print_r($box->cutInParts());