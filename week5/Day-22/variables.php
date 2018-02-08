<?php

$my_greeting = "Hello, world!";

echo $my_greeting;

$html_code = "<h1>My first PHP file</h1>";

echo $html_code; //$html_code still exists here

unset($html_code); // destroy the variable $html_code
// from here on $html_code does not exist anymore

echo $html_code; //$html_code does not exist anymore

$first_name = 'Bruce';
$surname = 'Wayne';

$year_of_birth = 1990;
$height = 150;

define ('SERVER_SOFTWARE','Apache');
define ('MY_OS','MAC OSX');

?>
<p>
    Firstname: <?php echo $first_name; ?> <br>
    Surname: <?php echo $surname; ?><br>
    <br>
    Year of birth: <?php echo $year_of_birth; ?><br>
    Height: <?php echo $height; ?><br>
</p>

<p>
    My server software is <?php echo SERVER_SOFTWARE; ?><br>
    My operating system is <?php echo MY_OS; ?>
</p>
