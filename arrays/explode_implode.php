<pre>
<?php

$werte = 'Peter, Bruce, Carol, Steve, Tony';
$arr = explode(', ', $werte);
print_r($arr);

$text = implode('#', $arr);
echo $text.PHP_EOL;

?>
</pre>