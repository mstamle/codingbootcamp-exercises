<?php

// begin here

// You're writing into a php file.

// Declare a variable named $message. Initialize it with the value 'I love coding' (a string).

// Declare another variable named $length and initialize it with the string length of $message (i.e. number of characters) using the function strlen.

// Use the function strlen which returns the length of a string (go to php.net and read up on it if you don't know it).

// Echo a line of text that would say:

// The length of the message 'I love coding' is 13

// Use the values of both the variables you created: $message and $length (i.e. don't manually write in the values).

// Try to perfectly match the single quotes in the sentence.


$message = 'I love coding';
$length = strlen($message);
echo "The length of the message '". $message ."' is " . $length . ".<br/>";