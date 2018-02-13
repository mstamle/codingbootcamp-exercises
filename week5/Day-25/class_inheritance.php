<?php date_default_timezone_set ('Europe/Berlin');


?>

<?php
class match{
    public $begins_at = null;
    public $score = null;
    public $nr_of_players = null;
    public $length = null; // in minutes

    public function __construct()
    {
        $this->begins_at = time();
    }

    public function getEstimatedEnd()
    {
        return $this->begins_at + $this->length * 60; // to get the minute
    }
}

class football_match extends match{
    public $nr_of_players = 22;
    public $length = 90;
    public $halves = ['0:0','0:0'];
    public $nr_ofsides = 0;
}


class icehockey_match extends match{
    public $nr_of_players = 12;
    public $length = 60;
    public $thirds = ['0:0','0:0','0:0'];

    public function getThirdScore($third)
    {
        return $this->thirds[($third-1)];
    }
}

echo 'Any match<br/>';

$morning_match = new match();
$morning_match->length = 90;
echo 'Beginning: ', date('H:i:s', $morning_match->begins_at);
echo '<br/> Ending: ', date('H:i:s', $morning_match->getEstimatedEnd()),'<br/>';

echo '<br/>Icehockey<br/>';

$hockey = new icehockey_match();
echo '<br/> This is the result from the 1st third: '.
    $hockey->getThirdScore(1) .'<br/>';
echo '<br/> This is the result from the 2nd third: '.
    $hockey->getThirdScore(2) .'<br/>';
echo '<br/> This is the result from the 3rd third: '.
    $hockey->getThirdScore(3) .'<br/>';

echo 'Beginning: ', date('H:i:s', $hockey->begins_at);
echo '<br/> Ending: ', date('H:i:s', $hockey->getEstimatedEnd());