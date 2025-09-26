<?php

function printDebugInfo() {
    if(DEBUG) {
        echo '<pre>';
        if(count($_GET) > 0) {
            print_r($_GET); 
        }
        if(count($_POST) > 0) {
            print_r($_POST);
        }
        if(count($_REQUEST) > 0) {
            print_r($_REQUEST); 
        }
        echo '</pre>';
    }
}

function printMetaInfo() {
    if(DEBUG) {
        echo '<pre>';
        print_r($_SERVER);
        print_r($_ENV);
        echo '</pre>';
    }
}