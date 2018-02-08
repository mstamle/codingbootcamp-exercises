<?php

$weather = 'raining';
// $weather = 'sunny';
// $weather = 'windy';
// $weather = 'meh';


if ($weather == 'raining')
{
    echo 'Let\'s stay indoors';
}
elseif($weather = 'sunny')
{
    echo "Let's put on sunscreen."
}
elseif($weather = 'windy')
{
    echo "Let's put on a coat."
}
else
{
    echo "Let's go outside.";
}