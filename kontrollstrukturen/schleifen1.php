<?php

$queue = ['A','X','Z','B','L'];

while(count($queue) > 0) {
    echo array_shift($queue);
}

echo '<hr>';

print_r($queue);

echo '<hr>';

$queue = [];

// Block wird mind. 1x ausgeführt
do {
    echo array_shift($queue) ?? 'Leer';
}
while(count($queue) > 0);

