<?php

$page = $_GET['p'] ?? 'standard';

switch($page) {

    case 'services':
        $subtpl = 'service';
        break;

    case 'about':
        $subtpl = 'about';
        break;

    default:
        $subtpl = 'welcome';
        
}

include_once './tpl/base.tpl.php';

