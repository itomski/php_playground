<pre>
<?php
date_default_timezone_set('Europe/Berlin'); // Setzt die Zeitzone für PHP

$datum = "25.05.2025 10:35";
//$datum = "15.06.2025 10:35";
//$datum = "2025-05-10";

$datum_arr = explode(".", $datum);
print_r($datum_arr);

$timestamp = strtotime($datum);
echo $timestamp.PHP_EOL;

echo date('d.m.y H:i', $timestamp).PHP_EOL; // Formatiert den Timestamp
echo date('d. M Y H:i', $timestamp).PHP_EOL;

echo PHP_EOL;

$timestamp = time(); // Liefert den aktuelle Timestamp
echo date('d.m.y H:i', $timestamp).PHP_EOL; 
echo date('d.m.y H:i').PHP_EOL; // Wenn kein Timestamp vorgegeben, dann wird die aktuelle/s Datum/Zeit verwendet

?>
</pre>