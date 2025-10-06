<?php

// Klassen für Objekte in der Session MÜSSEN vor dem Starten der Session eingebunden sein!
require_once 'Person.php';

session_start();

// Zu spät!
// require_once 'Person.php';

// $p1 = new Person('Peter', 'Parker');
// $_SESSION['obj'] = new Person('Peter', 'Parker');

if($_SESSION['obj'] instanceof Person) {
    echo 'Ist eine Person';
    $_SESSION['obj']->setVorname('Bruce');
    $_SESSION['obj']->setNachname('Banner');
}

print_r($_SESSION);
