<?php


require 'includes/config.php';

use \Patterns\Observer\BlogerType;
use \Patterns\Observer\Bloger;
use \Patterns\Observer\NewsPortal;
use \Patterns\Observer\Hund;

$observer1 = new Bloger('Peter Parker', BlogerType::SPORT);
$observer2 = new Bloger('Carol Danvers', BlogerType::WIRTSCHAFT);
$observer3 = new Bloger('Bruce Banner', BlogerType::ALLES);
$observer4 = new Hund('Blacky');
$observer5 = new Hund('Barky');

$subject = new NewsPortal('RTL');
// Observer werden angemeldet
$subject->attach($observer1);
$subject->attach($observer2);
$subject->attach($observer3);
$subject->attach($observer4);
$subject->attach($observer5);

$subject->setMsg('s:Schalke gegen HSV 1:0');
echo '<hr>';
$subject->setMsg('w:Neue Zölle aus der USA');
echo '<hr>';
$subject->setMsg('p:Keine Einigung im Koalitionsstreit');
echo '<hr>';
$subject->setMsg('s:Gold für die Ruderer');