<?php

// abstract = Es können keine Objekte direkt von Bot erzeugt werden
abstract class Bot {

    abstract function doTheJob(); // abstract = Muss in den Kindklassen eingebaut werden
    
}