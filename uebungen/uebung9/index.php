<?php

require_once 'includes/config.php';

use CoffeeHouse\Speciality;
use CoffeeHouse\CoffeeMachine;



if(isset($_GET['p'])) {

    $options = Speciality::cases();

    // Über den Link wird das Produkt ausgewählt
    $nr = intval($_GET['p']);
    $spec = $options[$nr];
    $machine = new CoffeeMachine();
    $output = $machine->brew($spec);
    print_r($machine);

}

include_once 'tpl/standard.php';