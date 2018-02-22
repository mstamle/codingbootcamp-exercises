<?php

$calling_codes = [
    'AR' => '+54',
    'CZ' => '+420',
    'DE' => '+49',
    'HU' => '+36',
    'US' => '+1'
];

$country_names = [
    'US' => 'USA',
    'HU' => 'Hungary',
    'CZ' => 'Czechia',
    'AR' => 'Argentina',
    'DE' => 'Germany',
    'DK' => 'Denmark',
    'IN' => 'India'
];

// your code begins here

// Write PHP code to loop through the array $calling_codes with the foreach loop and for each key and value print a line of text similar to this (replacing the country name and the number with the right values):

// The calling code of USA is +1<br>
// The calling code of Czechia is +420<br>

// It should print 5 lines in total.

foreach ($calling_codes as $country_code => $calling_code)
{
    foreach ($country_names as $key => $value) {
        if ($country_code == $key)
        {
            echo 'The calling code of ' . $value . ' is ' . $calling_code . '.<br>';
        }
    }
}