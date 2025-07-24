<?php

date_default_timezone_set('Europe/Berlin');

$zeit = time();
$zeit = mktime(0,0,1,10,15,2025);

$zeit = strtotime('15 September 2018'); // Erzeugt einen Zeitstempel
$zeit = strtotime('15.09.2018');
$zeit = strtotime('2018-09-15 -1 week');
$zeit = strtotime('+3 weeks');

echo time().'<br>'; // Aktuelle Zeitpunkt als Zeitstempel
echo date('d.m.y').'<br>'; // Aktuellen formatiert Zeitpunkt ausgeben
echo date('d.m.y', $zeit).'<br>'; // Vorhandenen formatiert Zeitpunkt ausgeben


$zeitpunkt = new DateTime();
$zeitpunkt = new DateTime('2015-10-22');
$zeitpunkt = new DateTime('2015-10-22 23:15:22');
echo $zeitpunkt->format('d M Y H:i:s').'<br>';
echo $zeitpunkt->format('Y-m-d H:i:s').'<br>';
echo '<hr>';
echo $zeitpunkt->format('Y-m-d').'<br>';
echo $zeitpunkt->format('H:i:s').'<br>';
