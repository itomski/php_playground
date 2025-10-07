<?php

trait SystemDebug {

    public function debug() {
        echo '<pre>';
        print_r($_SERVER);
        print_r($_ENV);
        echo '</pre>';

    }
}