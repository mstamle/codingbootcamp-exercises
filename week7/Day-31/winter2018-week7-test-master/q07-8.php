<?php

// Declare a class address

// It will have these (non-static) protected properties, all initialized to null:

// name
// street
// house_nr
// city
// country
// postal_code
// It will also have one static protected property local_country initialized to null

// Then add a public static method named setLocalCountry that would accept 1 argument: a string containing a name of a country. It would use that argument to set the value of the static property local_country that you added before.

class address
{
    protected $name = null;
    protected $street = null;
    protected $house_nr = null;
    protected $city = null;
    protected $country = null;
    protected $postal_code = null;

    protected static $local_country = null;
    public static function setLocalCountry($nameOfACountry)
    {
        static::$local_country = $nameOfACountry;
    }

    public function isLocal()
    {
        return ($this->country == static::$local_country) ? true : false;
    }
    public function setCountry($val)
    {
        $this->country = $val;
    }
}

$test = new address();
$test->setCountry('test');
$test->setLocalCountry('test');
var_dump($test->isLocal());


// Continuing with the class address write a public (non-static) method isLocal (no arguments) that would return boolean true if the value of the property country of the current object is the same as the value of the static property local_country, false if it is different.

// Explanation of real-world meaning: there are several countries, each represented by an object. At the same time there is just one "local country", i.e. the country that we are currently in. Each object country should be able to determine whether it is the local country or not.

