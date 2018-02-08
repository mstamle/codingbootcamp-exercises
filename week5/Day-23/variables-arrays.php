<?php

//1.(week5 - wednesday)
$movie_name = 'Arrival';

//2.
$ratings = [
    //6.
    'user642' => 69,
    'user214' => 95,
    'user013' => 82

];

// another way

// $num_ratings = [
//     69,
//     95,
//     82
// ];

// $assoc_keys = [
//     'user642',
//     'user214',
//     'user013'
// ];

// $ratings = array_combine($assoc_keys, $num_ratings);
// current($ratings); // first item
// next($ratings); // move the pointer to the next one
// current($ratings); // second item
// reset($ratings);
// current($ratings); // first item again, after reset

//3. 7.
// $pos = 0;
// foreach($ratings as $user_id => $rating){
//     $pos++;
// };

// current($ratings); // last one

//4.
function print_rating($rating)
{
    //5.
    echo $rating . '%';
}

//8.
$user_names = [
    'user642' => 'Bob',
    'user214' => 'Stuart',
    'user013' => 'Kevin'
];

$user_name = $user_names['user214'];

//9.
function get_username($user_id)
{
    global $user_names; //import $user_names from global scope
    return $user_names[$user_id];
}

//10.
foreach($ratings as $user_id => $rating){

    echo get_username($user_id) . ' gave the movie a ' . $rating .' % rating.<br>';
}

