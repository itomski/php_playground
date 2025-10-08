<?php

require_once 'ClassA.php';
require_once 'ClassB.php';


use Space1\ClassA;
use Space2\ClassB;

$c1 = new ClassA;
$c1->doSomething();
$c1->doSomethingElse();

$c2 = new ClassB;
$c2->doSomething();