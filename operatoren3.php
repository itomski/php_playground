<?php

echo '<pre>';

$a = 10;
$b = 3;

// AND
//a 00001010
//b 00000011
//e 00000010
echo $a & $b;
echo PHP_EOL;

// OR
//a 00001010
//b 00000011
//e 00001011
echo $a | $b;
echo PHP_EOL;

// XOR
//a 00001010
//b 00000011
//e 00001001
echo $a ^ $b;
echo PHP_EOL;


// XOR
//a 00001010
//e 00101000
echo $a << 2;
echo PHP_EOL;

echo '</pre>';

