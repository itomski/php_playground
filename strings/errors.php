<?php
declare(strict_types=1);

error_reporting(E_ALL);
//ini_set('error_reporting', E_ALL);
ini_set('display_errors', 0);
ini_set('log_errors', 'On');
ini_set('error_log', '/dev/stderr');

//phpinfo();
echo $x;

$pow = fn(int $a) => $a * $a;
echo $pow(5);

define('PI', 3.14);
echo PI.'<br>';

const PI2 = 3.14;
//unset(PI2);
echo PI.'<br>';

echo '<pre>';
print_r(get_defined_constants());
echo '</pre>';