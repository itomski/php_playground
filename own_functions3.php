<?php

declare(strict_types = 1);

function printUserInfo($firstname = 'Unbekannt', $lastname = 'Unbekannt', $age = 0) {
    echo "Vorname: {$firstname}, Nachname: {$lastname}, Alter: {$age}<br>";
}

printUserInfo('Peter', 'Parker', 32); // Zuordung der Werte erfolgt der Reihenfolge nach
printUserInfo(age: 32, firstname: 'Peter', lastname: 'Parker'); // Die Zuordung der Werte erfolgt über den Namen
printUserInfo(lastname: 'Peter');
printUserInfo('Peter', age: 35);

// int, float, bool, string, array, mixed

function printUserInfo2(string $firstname, string $lastname, int|float $age) {
    echo "Vorname: {$firstname}, Nachname: {$lastname}, Alter: {$age}<br>";
    echo var_dump($firstname);
    echo var_dump($lastname);
    echo var_dump($age);
}

//printUserInfo2(true, 10, 22);
printUserInfo2("true", "10", 22);


// : string = Rückgabewert ist Pflicht
// : ?string = Rückgabewert ist optional
function printUserInfo3(string $firstname, string $lastname, int|float $age): ?string {
    return "Vorname: {$firstname}, Nachname: {$lastname}, Alter: {$age}<br>";
    // return true;
    // return null;
}

$v1 = printUserInfo3('Bruce', 'Banner', 42);
echo $v1.'<br>';
var_dump($v1);

// void = kein Rückgabewert
function printUserInfo4(string $firstname, string $lastname, int|float $age): void {
    echo "Vorname: {$firstname}, Nachname: {$lastname}, Alter: {$age}<br>";
}