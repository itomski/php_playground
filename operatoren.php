<?php

function printLine($value) {
    echo $value.'<br>';
}

?>
<pre>
<?php

echo '100';
echo PHP_EOL;
echo '200';

echo PHP_EOL;
$zahlen = array(10,20,30);
print_r($zahlen);

?>
</pre>

<?php

// binär
printLine(1 + 10);
printLine(1 - 10);
printLine(1 * 10);
printLine(1 / 10);
printLine(3 + 10 * 2); // Punkt vor Strich: 23
printLine((3 + 10) * 2); // 26
printLine(3 % 10); // Modulo: 3
printLine(10 % 3); // Modulo: 10
printLine(5 ** 2); // Pow: 25

echo '<hr>';

$a = 10;

// unär
printLine(-$a);
$a = -10;
printLine(-$a);


$a = 100;
// postfix
printLine($a++); // Veränderung erfolgt für die nächste Nutzung der Variable 
printLine($a++); // Inkrement
// prefix
printLine(++$a);  // Veränderung erfolgt vor der Nutzung der Variable 
printLine(--$a); // Dekrement

$a = 1;
$b = 2;

$sum = $a + $b++; // b ändert sich für die nächste Nutzung: keine Auswirkung auf sum
$sum = $a + ++$b; // b ändert sich vor der Addition

$a = 1;
$b = 2;
$b = $a + ++$b; // 4
$a = 1;
$b = 2;
$b = $a + $b++; // 3: Das postfix geht durch die Zuweisung auf b verloren

echo '<br>';
printLine($b += 10); // $b = $b + 10;