<?php

function createNav(array $pages): string {
    $output = '<nav><ul>';
    foreach($pages as $k => $v) {
        $output .= '<li><a href="'.strtolower($v).'">'.ucfirst($k).'</a></li>';
    }
    $output .= '</ul><nav>';
    return $output;
}

$pages = ['start' => 'index.php', 
            'produkte' => 'produkte.php', 
            'blog' => 'index.php?a=blog', 
            'kontakt' => 'contact.html'];
echo createNav($pages);

function rollDice(int $count): array {
    $results = [];
    for($i = 0; $i < $count; $i++) {
        $results[] = rand(1, 6);
    }
    return $results;
}

print_r(rollDice(100));