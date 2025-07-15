<?php

// Controller

require_once 'classes/Task.php';
require_once 'classes/TaskRepository.php';

$repository = new TaskRepository();
$tasks = $repository->readAll();

if(isset($_POST['task'])) {
    $task = new Task(); // Task-Objekt erzeugen
    // Den leeren Task mit Daten aus dem Formular füllen
    $task->setName($_POST['task']);
    $task->setErzeugtAm(time());
    $tasks[] = $task; // Das gefüllte Objekt dem Array hinzufügen
    $repository->writeAll($tasks); // Array speichern
}

include_once 'tpl/standard.php';
