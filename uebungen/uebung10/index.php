<?php

const DATA_FILE = './events.txt';
const CLASS_DIR = './classes/';

require_once 'autoloading.php';

// TODO: mit file_exists prüfen ob Datei da ist

// DATEI LESEN
$em = unserialize(file_get_contents(DATA_FILE)); // ALTDATEN EINLESEN
if(!($em instanceof EventManagement)) {
    // EIN LEERES EventManagement BEREITSTELLEN
    $em = new EventManagement();
}

if(isset($_POST['type'])) {
    
    switch(strtolower($_POST['type'])) {

        case 'event':
            $dto = new EventDto($_POST);
            if(!$dto->hasErrors()) {
                $em->addEvent($dto->toEvent());
                file_put_contents(DATA_FILE, serialize($em)); // Aktueller Zustand des EventManagements wird gespeichert
            }
            break;
        
        // ggfl weitere Fälle
    }
}

$events = $em->getEvents();

include_once './tpl/form.php';