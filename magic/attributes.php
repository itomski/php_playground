<?php

class Thing {
    
    private $allowed = ['name', 'title', 'active'];
    private $attributes = [];

    function __set($attr, $v) {
        if(in_array($attr, $this->allowed)) {
            $this->attributes[$attr] = $v;
        }
    }

    function __get($attr) {
        if(in_array($attr, $this->allowed)) {
            return $this->attributes[$attr];
        }
        return null;
    }

    function __isset($attr) {
        return isset($this->attributes[$attr]);
    }

    function __unset($attr) {
        unset($this->attributes[$attr]);
    }
}

$t1 = new Thing();
$t1->name = 'Tasse';
$t1->xyz = 22;
$t1->title = 'Backen ohne Fett';
$t1->active = true;

var_dump($t1);

echo '<p>'.$t1->title.'</p>';

if(isset($t1->title)){
    echo 'DA!<br>';
}
else {
    echo 'NICHT DA!<br>';
}

unset($t1->title);

var_dump($t1);

