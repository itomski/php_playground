<?php

// echo '<pre>';
// print_r($_SERVER);
//print_r($_ENV);


// Zerlegt einen String nach einem Vergegebenen Trennen und erstellt daraus ein Array
// $accept = explode(',', $_SERVER['HTTP_ACCEPT']);
// print_r($accept);
// echo '</pre>';

// Muss erfolgen, bevor eine Ausgabe im Browser stattfindet
// header('Location: login.php');
// exit; // oder die() um die Ausführung von diesem Script nach der Umletung sofort zu beenden

// HTTP-Statuscodes
// 200: Dokument gefunden, OK
// 300er: Problem mit den Berechtigungen
// 404: Dokument nicht gefunden
// 500er: Serverseitige Probleme

setcookie('USERID', '1234567890', time() + 3600);
print_r($_COOKIE);

//http_response_code(404);
//header('HTTP/1.1 404 Not Found');

//echo 'Dies und das!';