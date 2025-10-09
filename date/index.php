<?php

$zeit = time();
$datum = date('d.m.y H:i:s', $zeit);
echo $datum.'<br>';

$zeit = strtotime('22.05.1985');
echo $zeit.'<br>';

echo '<pre>';
$jetzt = new DateTime(); // aktuelles Datum
print_r($jetzt);
$jetzt = new DateTime('2015-10-27');
print_r($jetzt);
$jetzt = new DateTime('2025-08-30 10:22');
print_r($jetzt);
$jetzt = new DateTime('now');
print_r($jetzt);
$jetzt = new DateTime('+2 weeks');
print_r($jetzt);
$jetzt = new DateTime('-1 week');
print_r($jetzt);

$start = new DateTime('2025-01-01');
print_r($start);
$start->modify('-1 week');
print_r($start);

$start = new DateTime('2025-01-01');
print_r($start);

$ende = new DateTime('2025-02-25');
print_r($ende);

$diff = $ende->diff($start);
print_r($diff);

$diff = $start->diff($ende);
print_r($diff);
echo $diff->format('%d days').'<br>';
echo $diff->format('%a total days').'<br>';

try {
    $jetzt = new DateTime('jdgjsdgajdgas');
    print_r($jetzt);
}
catch(Exception $e) {
    echo '<p>Falsches Datum</p>';
}
echo '</pre>';

echo $jetzt->format('d.m.y H:i:s').'<br>';
echo $jetzt->format('d.m.y').'<br>';
echo $jetzt->format('H:i:s').'<br>';
echo $jetzt->format(DateTime::ATOM).'<br>';