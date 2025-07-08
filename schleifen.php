<?php

// $i ist eine Zählervariable

// Beim ersten Durchlauf der Schleife wird $i auf 0 gesetzt
// Bei jedem Durchlauf wird geprüft, ob $i kleiner ist als 100
// Wenn ja, wird der Block ausgeführt
    // Anschließend wird $i um 1 erhöht
// Wenn nicht, wird die Schleife beendet
for($i=0; $i < 5; $i++) { 
    echo $i.'<br>';
}

$namen = ['Peter', 'Bruce', 'Carol', 'Tony', 'Natasha'];
echo '<pre>';
print_r($namen);
echo '</pre>';

for($i=0; $i < count($namen); $i++) { 
    echo $namen[$i].'<br>';
}

echo '<br>';

// $name wird jeweils mit dem aktuellen Element aus dr Sammlung $namen belegt
foreach($namen as $name) {
    echo $name.'<br>';
}

echo '<br>';

// Bei assoziativen Arrays, bei denen die Keys benötigt werden aus das möglich:
$person = [
    'vorname' => 'Peter',
    'nachname' => 'Parker',
    'geburtsDatum' => '22.07.1995'
];

foreach($person as $key => $info) {
    echo $key.': '.$info.'<br>';
}