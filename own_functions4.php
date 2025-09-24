<?php

function checkValue($value) {
    switch($value) {
        case 1:
            return 'OK';

        case 2:
            return 'Geht so!';

        case 3:
            return 'Habe es schon mal besser gesehen...';

        case $value >= 4:
            return 'Schlecht';

        default:
            return 'Keine Ahnung';
    }
}

echo checkValue(-6);

$v = 3;

// match = Jeder case hat automatsich ein berak

$output = match($v) {
    1 => 'OK',
    2 => 'Geht so',
    3 => 'Habe es schon mal besser gesehen...',
    4 => 'Schlecht',
    default => 'Keine Ahnung'
};

echo $output;