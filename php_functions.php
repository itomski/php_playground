<?php
echo gettype(100.5).'<br>';
echo gettype("...").'<br>';
echo gettype(10).'<br>';
echo gettype(false).'<br>';
echo gettype(new stdClass()).'<br>';
$typ = gettype(100.5); // Rückgabewert wird in eine Variable gespeichert
echo "<h2>{$typ}</h2>";

echo strtolower("Das ist das Haus von Nikigraus!");
// Der Wert ist hier bereits aus dem Speicher raus

// Wert verbleibt in der Variable
$output = strtolower("Das ist das Haus von Nikigraus!");
echo "<p>{$output}</p>";

$output = str_shuffle("Das ist das Haus von Nikigraus!");
$output = str_shuffle(strtoupper("Das ist das Haus von Nikigraus!"));
echo "<p>{$output}</p>";

$eingabe = " peTer  ";
$eingabe = ucfirst(strtolower(trim($eingabe)));
echo "<p>{$eingabe}</p>";