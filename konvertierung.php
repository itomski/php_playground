<?php
declare(strict_types = 1);

echo '<pre>';

$v1 = 'Text...';
$v1 .= 123;
var_dump($v1);
echo PHP_EOL;

$v1 = '2.5';
$v1 *= 4; // String wird in Zahl konvertiert
var_dump($v1);
echo PHP_EOL;

$v1 = 2.5;
$erg = (int)$v1 * (float)4; // casting
var_dump($erg);
echo PHP_EOL;

if(is_float($v1)) {
    echo 'IST EIN FLOAT'.PHP_EOL;
}

if(is_int($v1)) {
    echo 'IST EIN INT'.PHP_EOL;
}

if(is_string($v1)) {
    echo 'IST EIN STRING'.PHP_EOL;
}

if(is_bool($v1)) {
    echo 'IST EIN BOOL'.PHP_EOL;
}

$v2 = 'Das ist das Haus von Nikigraus';
$v2 = boolval($v2);
var_dump($v2);
echo PHP_EOL;

?>
</pre>