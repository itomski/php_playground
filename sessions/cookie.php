<?php

setcookie('abc', '12345678abc', time() + 3600, '/sessions/', 'localhost');

print_r($_COOKIE);
echo '<p>'.($_COOKIE['abc'] ?? 'Leer').'</p>';