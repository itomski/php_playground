<?php

$hobby = 'Boxen, Reiten, Handball';
$parts = explode(',', str_replace(' ', '', trim($hobby)));
print_r($parts);

$parts = explode(',', str_replace(' ', '', trim($hobby)));
$v1 = $parts[0];
$v2 = $parts[1];
$v3 = $parts[2];

echo '<hr>';

list($a1, $a2, $a3) = explode(',', str_replace(' ', '', trim($hobby)));
echo $a1.'<br>';
echo $a2.'<br>';
echo $a3.'<br>';