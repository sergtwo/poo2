<?php

$spitFire = function() {
    echo "I spit fire";
};

$spitIce = function() {
    echo "I spit ice";
};

class Character
{
    public function __call($method, $args)
    {
        if (isset($this->$method)) {
            $func = $this->$method;
            return call_user_func_array($func, $args);
        }
    }
}

$zelda = new Character();
$zelda->power = $spitFire;
$zelda->power();