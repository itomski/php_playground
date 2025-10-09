<?php
namespace Space1;

require_once 'TraitA.php';

class ClassA {

    //use Space3\TraitA; // relativ - sucht nach dem Namespace innerhalb des aktuellen namespace
    use \Space3\TraitA; // absolte - sucht nach dem Namespace außerhalb des aktuellen namespace

    function doSomething() {
        echo __NAMESPACE__.' '.__CLASS__.' doSomething<br>';
    }
}