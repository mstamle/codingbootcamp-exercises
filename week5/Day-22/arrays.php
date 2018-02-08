<?php

//require functions to visualize arrays
require_once 'var_show.php';

$fruit = [
    'Apple', // automatically assigned index 0
    'Pear',  // automatically assigned index 1
    'Orange' // automatically assigned index 2
];

$fruit_colors = [
    'Apple' => 'Red',
    'Pear' => 'Green',
    'Orange' => 'Orange'
];

// var_show($fruit);
// var_show($fruit_colors);

$cars_i_want = [];

//adding items to the array:
//with a specific key

// $cars_i_want['German'] = 'Smart';
// $cars_i_want['Czech'] = 'Skoda';
//with a numeric key
// $cars_i_want[] = 'MINI';
// $cars_i_want[] = 'Sedan';
// $cars_i_want[] = 'Bugatti';
// $cars_i_want[] = 'Ferrari';
// $cars_i_want[] = 'Mercedes';
//one more way:
$cars_i_want = [
    'Aston Martin',
    'Bugatti',
    'Ferrari',
    'Lamborghini',
    'Maserati',
    'Mercedes',
    'Porsche',
    'Skoda'
];

var_show($cars_i_want);

$cars_i_want[4] = 'Smart';

var_show($cars_i_want);


shuffle($cars_i_want);
var_show($cars_i_want);

echo'<ul>';//to begin list

foreach($cars_i_want as $car_name)
{
    echo '<li>'. $car_name .'</li>';
}
echo'</ul>';//to close list