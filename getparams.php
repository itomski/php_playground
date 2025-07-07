<?php

$auswahl = filter_input(INPUT_GET, 'p');
// $auswahl = $_GET['p'];

/*
switch($auswahl) {

    case 'home':
        $headline = 'Startseite';
        $content = '...'
        break;

    case 'services':
        $headline = 'Unsere Services für Sie';
        break;

    case 'about':
        $headline = 'Über uns';
        break;

    case 'contact':
        $headline = 'Schreiben Sie uns';
        break;

    default:
        $headline = 'Error!';
}
*/

$headline = match($auswahl) {
    'home' => 'Startseite',
    'services' => 'Unsere Services für Sie',
    'about' => 'Über uns',
    'contact' => 'Schreiben Sie uns',
    default => 'Error',
};

include_once 'templates/standard.html';