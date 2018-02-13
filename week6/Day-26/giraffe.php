<?php

class giraffe {

    public static $nr_of_giraffes = 0;
    public $is_hungry = true;
    public $is_thirsty = true;
    public $name = null;

    public function __construct($name)
    {
        //assign the giraffe the given name
        $this->name = $name;
        //increase the global number of girrafes by 1
        static::$nr_of_giraffes ++;
    }

    public function feed()
    {
        $this->is_hungry = false;
    }

    public function drink()
    {
        $this->is_thirsty = false;
    }

    public function isHappy()
    {
        return !$this->is_thirsty && !$this->is_hungry;
    }
}