<?php

trait DebugInfo {

    private bool $debug_mode = false;

    public function setDebugMode(bool $debug) {
        $this->debug_mode = $debug;
    }

    public function debug() {
        if($this->debug_mode) {
            echo '<pre>';
            print_r($this);
            echo '</pre>';
        }
    }
}