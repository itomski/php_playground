<?php

/*
abstract class AbstractEntity {

    private int $id;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
}


class User extends AbstractEntity {

    private string $firstname;
    private string $lastname;

    function __construct(string $firstname, string $lastname)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }
}

class Request extends AbstractEntity {
    
    private int $createdAt;

    function __construct()
    {
        $this->createdAt = time();
    }
}

function check(AbstractEntity $e) {
    $e->getId();
}

check(new User('Peter', 'Parker')); // Ok: User ist auch eine AbstractEntity
check(new Request()); // Ok: Request ist auch eine AbstractEntity
*/

// Besser
trait Entity {

    private int $id;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
}

interface Identificable {

    public function getId();

    public function setId($id);

}

class User implements Identificable {

    private string $firstname;
    private string $lastname;

    use Entity;

    function __construct(string $firstname, string $lastname)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }
}

class Request implements Identificable {
    
    private int $createdAt;

    use Entity; // Verändert nicht den Datentyp

    function __construct()
    {
        $this->createdAt = time();
    }
}


function check(Entity $e) { // Prüfung auf ein Trait ist hier NICHT richtig!
    //var_dump($e);
    $e->getId();
}
// check(new User('Peter', 'Parker')); // Error: User ist kein Entity-Objekt
// check(new Request()); // Error: Request ist kein Entity-Objekt

function checkNext(Identificable $e) {
    //var_dump($e);
    $e->getId();
}
checkNext(new User('Peter', 'Parker')); // Ok: User ist Identificable
checkNext(new Request()); // Ok: Request ist Identificable
