<?php

require_once 'Printer1.php';
require_once 'Printer2.php';

use Project1\Printer; // Klasse wird vorgestellt, so dass sie zukünftig ohne Angabe des namespace genutzt werden kann
use Project2\Printer as NextPrinter; // Alias wird angelegt

$p1 = new Printer();
$p2 = new NextPrinter();
$p1->print('Das ist das Haus von Nikigraus');
$p2->printOut();