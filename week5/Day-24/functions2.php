<?php

$number_of_errors = 0;

function log_error(){
    global $number_of_errors;
    $number_of_errors ++;
    return $number_of_errors;
}

log_error();
log_error();

echo $number_of_errors;

$messages = [];

function add_message($text){
    global $messages;
    $messages[] = $text;
    return $messages;
}

add_message('Foo');

var_dump($messages); // [0 => 'Foo']

$remainder = 0;


// Practicing the use of passing by reference. In this example, we can return
// two values: the result by return statement and the remainder by referring.

function divmod($dividend,$divisor,&$remainder){


    if($divisor == 0){
        // // option 1
        // echo 'Not possible to divide by zero!';
        // return;
        //option 2
        die('Not possible to divide by zero!');
        // //option 3
        // throw new Exception('Not possible to divide by zero!');
    };
    $remainder = $dividend % $divisor;
    return $dividend/$divisor;
}

$result = divmod(3,2,$remainder);
echo $result . '<br>';
echo $remainder;

// Write a function add_item that would add a new numerically indexed item
// to an array.

$item = 'abc';
$array = [];
$count = 0;

function add_item($array,$item,&$count){
    global $array;
    $array[] = $item;
    $count++;
    return $array;
}

add_item($array, $item, $count);
var_dump($array); // [0 => 'abc']
var_dump($count); // 1

add_item($array, 'def', $count);
var_dump($array); // [0 => 'abc', 1 => 'def']
var_dump($count); // 2


// Default argument values

function headline($text,$importance = 1){
    echo '<h'.$importance.'>'.$text.'</h'.$importance.'><br>';
}

echo headline('Foo', 2); // <h2>Foo</h2>
echo headline('Bar'); // <h1>Foo</h1>


//sanitize

function headlinesanitize($headline,$level = 1){
    $headline = htmlspecialchars($headline);
    return sprintf("<h%d>%s</h%d>\n",$level, $headline,$level);
}

function headlinesanitize2($headline,$level = 1){
    $headline = htmlspecialchars($headline);
    return sprintf('<h%1$d>%2$s</h%1$d>\n',$level, $headline);
}

echo headlinesanitize('Some Headline','blahahabla');
echo headlinesanitize('</h1><p>Some headline</p>','messytextsblah');







// Default argument values 2

function element($element,$innerhtml,$class='',$id=''){

}



