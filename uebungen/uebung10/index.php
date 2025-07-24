<?php

const DATA_FILE = './events.txt';
const CLASS_DIR = './classes/';

require_once 'autoloading.php';

// $event = new Event(); // Leeres Event
// $event->setStartDate(new DateTime('25.07.2025 18:00'));

// $end = new DateTime('25.07.2025');
// $end->modify('22:00');
// $event->setEndDate($end);

// $event->setTitle('Dinner mit Stars der Internet Branche');
// $event->setDescription('Das ist ein ganz tolles Dinner mit feinen Leuten und lecker Essen!');


// $em = new EventManagement();
// $em->addEvent('gsdkahdslds'); // Error: ist kein Event
// $em->addEvent(123);  // Error: ist kein Event
// $em->addEvent($event);
// file_put_contents(DATA_FILE, serialize($em));

$em = unserialize(file_get_contents(DATA_FILE));

foreach($em->getEvents() as $e) {
    echo $e->getTitle().'<br>';
} 


// $events = [];
// die $events Variable ist öffentlich und kann jederzeit manipuliert werden
// $events[] = $event;
// $events = false; // Array wird mit bool überschrieben

// $eingabe = 'dfjgfdkjghfsdkhfd';

// if($eingabe instanceof Event) {
//     array_push($events, $eingabe);  // $events ist kein Array mehr
// }

// $events[] = 123;

if(isset($_POST['type'])) {
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
}

include_once './tpl/form.php';