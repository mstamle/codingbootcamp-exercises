<?php

require_once 'giraffe.php';

$brusinka = new giraffe('Brusinka');
$brusinka->feed();

var_dump($brusinka);



$jahoda = new giraffe('Jahoda');
$jahoda->feed();
$jahoda->drink();

var_dump($jahoda);

echo 'There are ' . giraffe::$nr_of_giraffes . ' giraffes in Africa.';

echo $brusinka->name . ' is ' . ($brusinka->isHappy() ? '' : 'not') . ' happy.<br/>';
echo $jahoda->name . ($jahoda->isHappy() ? ' is' : ' is not').'  happy.<br/>';
