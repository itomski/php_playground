<?php


function autoload(string $className): void {
   $file = './classes/'.$className.'.php';
   if(file_exists($file))
        require_once $file;
}

spl_autoload_register('autoload');

$b1 = new IndustrieBot();
$b1->doTheJob();

$b2 = new ForschungsBot();
$b2->doTheJob();

echo '<br>';

// Composite: Führe eine Akttion auf einer Gruppe von Objekten so aus, als wäre es ein Objekt

$gruppe = new BotGruppe();
$gruppe->add($b1);
$gruppe->add($b2);
$gruppe->add(new IndustrieBot());
$gruppe->add(new HaushaltsBot());

// $gruppe->doTheJob();

$gruppe2 = new BotGruppe();
$gruppe2->add(new HaushaltsBot());
$gruppe2->add(new ForschungsBot());
$gruppe2->add(new IndustrieBot());
$gruppe2->add($gruppe);

$gruppe2->doTheJob();

