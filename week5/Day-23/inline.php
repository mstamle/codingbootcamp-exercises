<?php

$vehicles = [
    'Bicycle' => 50,
    'Car' => 150,
    'Train' => 110
];

$messages = [
    'Preparing to do some stuff...',
    'Doing amazing stuff...',
    'Stuff is done.'
];

// $messages = [];



?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<table>
    <tr>
        <th>Means of transport</th>
        <th>Max. speed (km/h)</th>
    <tr>
    <?php foreach($vehicles as $vehicle => $top_speed) : ?>  <!-- : is { -->
    <tr>
        <td><?php echo $vehicle; ?></td>
        <td><?php echo $top_speed; ?></td>
    </tr>
    <?php endforeach; ?> <!-- endforeach; is } -->

</table>

    <?php if($messages) : ?>
        <ul class="messages" style="padding: 2em; border: 1px solid black; margin: 1em;">
            <?php foreach($messages as $message) : ?>
            <li><?php echo $message?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <!-- When there is a PHP condition, anything icluding HTML and PHP
    in between will be bound within the if condition  -->

</body>
</html>


