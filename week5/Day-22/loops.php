<?php

//set script time limit to 2 seconds
set_time_limit(2);

$days_to_christmas = 365 -7 -37;

while($days_to_christmas > 0)
{
    $days_to_christmas --;
    echo 'There are still ' . $days_to_christmas .' days to Christmas.<br>';
}

//This exercise is about the prison time served

$time_served = 0;

while($time_served < 10)
{
    $time_served++;
    echo 'The prisoner has served ' . $time_served . ' years.<br>';
}

echo <hr>;

for($i =10; $i>0;$i--)
{
    echo 'The prisoner has ' . $i . ' more years to serve.<br>';

    //skip the rest of the loop's code if he has less than 5 years left

    if( $i > 5) continue;

    {

    }
}