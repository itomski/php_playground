<?php

require_once './classes/Kundenverwaltung/Entities/Person.php';

use Kundenverwaltung\Entities\Person;

$p = new Person('Peter', 'Parker');
echo $p->gibHallo().'<br>';
echo $p->gibWert('Alter').'<br>';