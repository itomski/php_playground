<?php

$namen = ['Peter', 'Bruce', 'Unbekannt', 'Carol', 'Natasha', 'exit', 'Scott'];

// funktioniert mit for, foreach, while und do-while
for($i = 0; $i < count($namen); $i++) {
    $name = $namen[$i];
    
    if($name == 'Unbekannt') continue; // springt zum nächsten Durchlauf

    echo $name.'<br>';
}

echo '<hr>';

for($i = 0; $i < count($namen); $i++) {
    $name = $namen[$i];

    if($name == 'Unbekannt') break; // bricht die Schleife ab
    
    echo $name.'<br>';
}

echo '<hr>';

for($i = 0; $i < count($namen); $i++) {
    $name = $namen[$i];

    if(strtolower($name) == 'unbekannt') continue; // springt zum nächsten Durchlauf
    if(strtolower($name) == 'exit') break; // bricht die Schleife ab
    
    echo $name.'<br>';
}

echo '<hr>';

for($i=0; $i < 10; $i++) { // Reihen
    for ($j=0; $j < 10; $j++) { // Spalten
        echo $j.' ';
    }
    echo '<br>';
}

echo '<hr>';

$spielfeld = [
    [0,0,0,0,0,0,0,0,0,0,0],
    [0,0,0,0,1,0,0,0,0,0,0],
    [0,0,0,0,1,0,0,0,0,0,0],
    [0,0,0,0,1,0,0,0,0,0,0],
    [1,0,0,0,0,0,0,0,0,0,0],
    [1,0,0,0,1,0,0,1,1,1,0],
    [0,0,0,0,1,0,0,0,0,0,0],
    [0,0,0,0,0,0,0,0,0,0,0],
    [0,0,0,0,0,0,0,0,0,0,0],
    [0,0,0,0,0,0,0,0,0,0,0],
    [0,0,0,0,0,0,0,0,0,0,0]
];

echo '<pre>';
foreach($spielfeld as $row) {
    foreach($row as $cell) {
        if($cell == 0) echo '#';
        if($cell == 1) echo '@';
    }
    echo PHP_EOL;
}
echo '</pre>';

echo '<hr>';

echo '<pre>';
for($i=0; $i < 10; $i++) { // Reihen
    for ($j=0; $j < 10; $j++) { // Spalten
        if($spielfeld[$i][$j] == 0) echo '# ';
        if($spielfeld[$i][$j] == 1) echo '@ ';
    }
    echo PHP_EOL;
}
echo '</pre>';