<?php

//echo date_default_timezone_get();
date_default_timezone_set('Europe/Berlin');

$past = strtotime('30.08.2025 16:45');
$present = time();
$future = $present + (60 * 60 * 24 * 30);

echo date('d.m.y H:i', $past).'<br>';
echo date('d.m.y H:i', $present).'<br>';
echo date('d.m.y H:i', $future).'<br>';
var_dump(date('d.m.y H:i', $future));