<?php

// Controller

require_once 'pages.php';

$cur = filter_input(INPUT_GET, 'p');

// wenn Auswahl nicht richtig, dann home als Standard nehmen
$page = $pages[$cur] ?? $pages['home'];

// echo '<pre>';
// print_r($page);
// echo '</pre>';

include_once 'standard.tpl.php';