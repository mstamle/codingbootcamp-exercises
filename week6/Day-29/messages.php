<?php

//Initialization part
// $dbh = new PDO('mysql:host=localhost;dbname=dsagency', 'root', 'rootroot');

$pdo= new PDO(
'mysql:dbname=dsagency;host=localhost;charset=utf8', // connection information
'root', // username
'rootroot' // password
);



//Action part

if (count($_POST)>0)
{
    $agent_id = filter_input(INPUT_POST,'agent_id', FILTER_VALIDATE_INT);
    $clearance_level = filter_input(INPUT_POST,'clearance_level', FILTER_VALIDATE_INT);
    $body = filter_input(INPUT_POST, 'body');

    if (!$agent_id || !$clearance_level || $body == '')
    {
        header('Location: ?success=no');
    }
    else
    {
        //Insert into the database
        $statement = $pdo->prepare('INSERT INTO message (agent_id, clearance_level,body) VALUES (?,?,?)');
        $result = $statement->execute([$agent_id,$clearance_level,$body]);
        header('Location: ?success=yes');
    }
}

//Template (display) part
$success = filter_input(INPUT_GET,'success');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Deep Secret Agent</title>
</head>
<body>
<?php if ($success == 'no') echo '<p style="color: red">FAIL</p>'; ?>
<?php if ($success == 'yes') echo '<p style="color: green">SUCCESS</p>'; ?>

<div class="container">
<h1>Your Secret Message Portal</h1>
<form action="" method="post" class="d-flex flex-column">
<label for="agent_id">Agent ID:
    <input type="text" name="agent_id" id="agent_id">
</label>
<label for="clearance_level">Clearance level:
    <input type="text" name="clearance_level" id="clearance_level">
</label>
<label for="body">Body:<br/>
    <textarea name="body" id="body" cols="30" rows="10"></textarea>
</label>
<input type="submit" value="Insert message">
</form>

<table>
<?php
$statement = $pdo->query("SELECT * FROM message");
foreach ($statement->fetchAll(PDO::FETCH_ASSOC) as $row) {
	echo "<tr><td>" . join('</td><td>', $row) . '</td></tr>';
}

?>
</table>

</div>


</body>
</html>