<?php

echo '<pre>';

$page = [
    'header' => 'Kopfbereich',
    'main' => 'Hauptbereich',
    'footer' => 'Fußbereich'
];

// Destructing eines assoziativen Arrays
extract($page); // Wandelt die Schlüssel des Arrays in Variablen um
//echo $header;

print_r($page);

// Änderung an der Variable verändert nicht das Oringinal im Array
$header = 'Geänderter Kopfbereich';

print_r($page);

[$n1, $n2] = [['Peter', 'Parker', 'Spiderman'], ['Bruce', 'Banner', 'Hulk'], ['Carol', 'Danvers','Cap. Marvel']]; // Zuweisung von Werten eines Arrays auf Variablen
print_r($n1);
print_r($n2);


// Destructing von Objekten
class Hero {
    public $vorname = 'Peter';
    public $nachname = 'Parker';
    public $heldName = 'Spiderman';
}

$h1 = new Hero();
extract(get_object_vars($h1));
echo $vorname.PHP_EOL;
echo $h1->vorname.PHP_EOL;

echo '</pre>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header><?= $header ?></header>
    <main><?= $main ?></main>
    <footer><?= $footer ?></footer>
</body>
</html>