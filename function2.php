<?php

function machWas($name, $alter, $aktiv){
    echo "Moin! Mein Name ist {$name}. Ich bin {$alter} Jahre alt. Ich bin ".($aktiv ? 'aktiv' : 'nicht aktiv').'.<br>';
}

machWas('Peter', 25, true);
machWas(aktiv: true, name: 'Peter', alter: 25);
