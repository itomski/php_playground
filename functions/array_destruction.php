<pre>
<?php

$arr = ['Das ist das Haus von Nikigraus',
        'Backen ohne Mehl',
        'Kochen ohne Fett'];

print_r($arr);

/*
$v1 = $arr[0];
$v2 = $arr[1];
$v3 = $arr[2];
var_dump($v1, $v2, $v3);
*/

[$v1, $v2, $v3, $v4] = $arr;
var_dump($v1, $v2, $v3, $v4);

echo '<hr>';

$data = require 'data.php';
foreach($data as ['vorname' => $v, 'nachname' => $n]) {
    echo $v.' '.$n.'<br>';
}

?>
</pre>