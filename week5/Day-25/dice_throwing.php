<?php
class dice
{
    public $faces;

    public function __construct($faces = 6)
    {
        $this->faces = $faces;
    }
    public function roll()
    {
        echo rand(1,$this->faces);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dice Throwing</title>
</head>
<body>

<form method="post" action="">
<label for="">Number or dice
<input type="text" name="number">
</label>
<label for="">Number of faces
<select name="faces">
<option value="4">4</option>
<option value="6">6</option>
<option value="10">10</option>
<option value="20">20</option>
</select>
</label>

<input type="submit" value="throw">

<?php
if (isset($_POST['number'])){
    //read from $_POST
    //loop and roll all dice
    $dice = new dice();

    for($i = 0; $i < $_POST['number'];$i++)
    {
        echo '<br/>',$dice->roll(), '<br/>';
    }

}
?>

</form>

</body>
</html>