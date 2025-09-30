<?php

function doSomething(string $param): void  {
    echo '<h2>'.$param.'</h2>';
}

doSomething('Moin');
doSomething('Hi');

$f1 = function(string $param): void {
    echo '<h2>'.$param.'</h2>';
};

$f2 = function(string $param): void {
    echo '<p>'.$param.'</p>';
};

$f1('Salute');

function printString(string $str, $f) {
    $f($str);
}

printString('Text...', $f1);
printString('Text...', $f2);

printString('Text...', function($param) {
    echo '<div>'.$param.'</div>';
});

echo '<hr>';

$zahl = 100;

function doSomethingElse() {
    $zahl = 10;
    $f = function() use (&$zahl) { // Die anonyme Funktion nutzt eine Variable, die außerhalb deklariert ist
        echo $zahl.'<br>';
    };
    $zahl = 2;
    $f();
    $zahl = 5;
    $f();
    $zahl = 100;
    $f();
}

doSomethingElse();

$x = 100;
$multi = fn($a) => $a * $x; // Das $x ist hier automatisch verfügbar (ohne use-Anweisung)
$add = fn($a, $b) => $a + $b; // Besteht aus einer Anweisung und hat ein automatisches return
$sub = fn(int $a, int $b): int => $a - $b; // Mit Typisierung

echo $multi(10).'<br>';
echo $add(10,20).'<br>';


$operations = ['+' => fn($a, $b) => $a + $b,
                '-' => fn($a, $b) => $a - $b,
                '*' => fn($a, $b) => $a * $b,
                '/' => fn($a, $b) => $a / $b];

echo $operations['+'](10, 15).'<br>';
echo $operations['-'](10, 15).'<br>';
echo $operations['*'](10, 15).'<br>';
echo $operations['/'](10, 15).'<br>';


$sum = function(float ...$params): float {
    $erg = 0;
    foreach($params as $p)
        $erg += $p;

    return $erg;
};

echo $sum().'<br>';
echo $sum(1,2,3,4,5).'<br>';
echo $sum(20,15,17,99,-2,18.5,20.7,21).'<br>';

// $arr = [20,15,17,99,-2,18.5,20.7,21];
// echo $sum($arr).'<br>'; // Error