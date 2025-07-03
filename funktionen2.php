<?php

echo '<pre>';

$text = 'Das ist das Haus von Nikigraus';
$text = strtolower($text); // Kleinbuchstaben
echo $text.PHP_EOL;

echo ucfirst($text).PHP_EOL; // Erster Buchstabe wird Groß

$text = strtoupper($text); // Großbuchstaben
echo $text.PHP_EOL;

$eingabe = "Start";
$gesucht = "start";

if(strtolower($eingabe) == $gesucht) {
    // beides gleichwertig
    print 'gefunden'.PHP_EOL;
    // echo 'gefunden',PHP_EOL;
}
else {
    print 'nicht gefunden'.PHP_EOL;
}


echo '</pre>';