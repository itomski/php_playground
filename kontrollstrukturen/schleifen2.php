<?php

$spielfeld = [
    [0,0,0,0,0,0,0,0,0,0],
    [0,0,0,0,0,0,0,0,0,0],
    [0,0,0,0,0,0,0,0,0,0],
    [0,0,0,0,0,0,0,0,0,0],
    [0,0,0,0,0,0,0,0,0,0],
    [0,0,0,0,0,0,0,0,0,0],
    [0,0,0,0,0,0,0,0,0,0],
    [0,0,0,0,0,0,0,0,0,0],
    [0,0,0,0,0,0,0,0,0,0],
    [0,0,0,0,0,0,0,0,0,0],
];

echo $spielfeld[3][5].'<br>';

$spielfeld[3][5] = '@';

for ($i=0; $i < count($spielfeld); $i++) { // Zeilen
    for ($j=0; $j < count($spielfeld[$i]); $j++) { // Spalten
        echo $spielfeld[$i][$j].' ';
    }
    echo '<br>';
}

echo '<hr>';

foreach($spielfeld as $row) { // Reihen
    foreach($row as $col) { // Spalten
        echo $col.' ';
    }
    echo '<br>';
}

echo '<hr>';

foreach($spielfeld as $key => $row) { // $key ist der Schlüssel
    echo $key.': ['.implode($row).']<br>';
}

echo '<hr>';

foreach($spielfeld as $key => $row) {

    if($key % 2 == 0) {
        echo $key.': ['.implode($row).']<br>';
    }
}

echo '<hr>';

foreach($spielfeld as $key => $row) {
    if($key % 2 == 1) continue; // zum nächsten Durchlauf springen: Der Rest des Blocks wird ignoriert
    echo $key.': ['.implode($row).']<br>';
}

echo '<hr>';

foreach($spielfeld as $key => $row) {
    echo $key.': ['.implode($row).']<br>';
    if($key == 4) break; // bricht die Schleife ab
}