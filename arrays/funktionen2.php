<pre>
<?php

function addAndSort(string ...$values): array {
    // Values werden als ein Array bereitgestellt
    $set = [];
    foreach($values as $v) {
        if(!in_array($v, $set)) {
            $set[] = $v;
        }
    }
    sort($set);
    return $set;
}

$arr = addAndSort(10, 20, -10, 17, 33, 20, 17);
//print_r($arr);
var_dump($arr);

?>
</pre>