<pre>
<?php

$a = 10;
$b = 20;

var_dump($a && $b); // logisch: var_dump(true && true);
var_dump(!$a && $b); // logisch: var_dump(false && true);

var_dump($a & $b); // bitweise

// 00001010 => 10
// 00010100 => 20
// 00000000 => 0

// 00001010 => 10
// 00001010 => 10
// 00001010 => 10

var_dump(true & false); // bitweise: var_dump(1 & 0);

var_dump($a > 20 && $b < 10); // logisch: var_dump(false && false);

var_dump($a > 20 || $b < 10); // logisch: var_dump(false || false);


var_dump($a | $b); // bitweise

// 00001010 => 10
// 00010100 => 20
// 00011110 => 30

// 00001010 => 10
// 00001010 => 10
// 00001010 => 10

?>
</pre>

