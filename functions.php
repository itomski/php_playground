<?php

$xyz = function() :void {
    echo 'Hallo<br>';
};

//$xyz(); // Aufruf einer anonymen Funktion, die einer Variable zugewiesen wurde


function doSomething($callBack) :void {
    echo 'doSomething<br>';
    $callBack();
}

doSomething($xyz);
//doSomething(123); // Error

$abc = function() {
    echo 'ABC<br>';
};

doSomething($abc);

// Verwendung einer anonymen Funktion als Parameter
doSomething(function(){
    echo 'Anonym<br>';
});


function doSomethingElse($text) : string {

    // Funktion wird im globalen Umfeld angelegt
    // function check($value): bool {
    //     return strlen($value) > 0;
    // }

    // Funktion wird im lokalen Umfeld angelegt - ist also nur in dieser Funktion nutzbar
    $check = function($value): bool {
        return strlen($value) > 0;
    };

    if($check($text)) {
        return 'Der Text ist lang genug<br>';
    }
    return 'Ungültiger Text<br>';
};

echo doSomethingElse('Das ist das Haus von Nikigraus!');

// globale Funktion ist hier sichtbar
// lokale Funktion ist hier nicht mehr sichtbar
// echo check('Abc'); // Error

$value = 100;

// use macht eine Variable außerhab der Fuktion in der Funktion sichtbar
$add = function(float $a) use ($value) : float {
    $value++;
    return $a + $value;
};

echo $add(200).'<br>';
echo $value.'<br>';