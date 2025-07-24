<?php

$page = $_GET['p'] ?? 'standard';

switch($page) {

    case 'services':
        $subtpl = 'service';
        break;

    case 'about':
        $subtpl = 'about';
        $cards = [
            ['name' => 'Peter Parker', 'position' =>'CEO'],
            ['name' => 'Bruce Banner', 'position' => 'Security'],
            ['name' => 'Carol Danvers', 'position' => 'HR']
        ];
        break;

    default:
        $subtpl = 'welcome';
        
}

include_once './tpl/base.tpl.php';

