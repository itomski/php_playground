<?php

$arr = [1,2,3,4,5,6,7,8,9,0];
shuffle($arr);

foreach($arr as $zahl) {
    echo $zahl.'<br>';
}

echo '<hr>';

function randGenerator($num, $min, $max) {
    for($i = 0; $i <= $num; $i++) {
        yield rand($min, $max);
    }
}

foreach(randGenerator(10, 1, 10) as $zahl) {
    echo $zahl.'<br>';
}