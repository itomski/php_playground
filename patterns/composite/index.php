<?php

spl_autoload_register(function(string $class) {
    $path = ''.$class.'.php';
    if(file_exists($path)) {
        require_once $path;
    }
});


$memo1 = new Memo("Bla bla bla bla");
$memo2 = new Memo("Das ist das Haus von Nikigraus");
$group1 = new PrintGroup($memo1, $memo2);
$group1->add(new Memo("Backen ohne Mehl"));

/*
echo '<pre>';
print_r($group1);
echo '</pre>';
*/

$book1 = new Book("Neuromancer", "William Gibson");
$book1->addPage("Bla 1");
$book1->addPage("Bla 2");

$book2 = new Book("Idoru", "William Gibson");
$book2->addPage("Bla 1");
$book2->addPage("Bla 2");
$book2->addPage("Bla 3");

$group2 = new PrintGroup($book1);

$queue = new PrintJobQueue();
$queue->addJob($group1);
$queue->addJob($group2);
$queue->addJob($book2);
$queue->start();