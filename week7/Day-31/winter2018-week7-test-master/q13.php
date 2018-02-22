<?php

$pdo; // let's assume that this is an established PDO connection object

// run query here
$id_query = 81;
$statement = $pdo->prepare('SELECT `delivery`.* FROM `delivery` WHERE `delivery`.`id` = ?');
$result = $statement->execute([$id_query]);
