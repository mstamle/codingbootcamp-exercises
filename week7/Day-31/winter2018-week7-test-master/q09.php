<?php

class dog
{
    protected $name = 'Benjie';

    // the correct answer will make this file work
    function __tostring()
    {
        return $this->name;
    }
}

$benjie = new dog();

echo $benjie;