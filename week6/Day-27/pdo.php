<?php

$pdo_connection = new PDO(
    'mysql:dbname=world;host=localhost;charset=utf8', // connection information
    'root', // username
    'rootroot' // password
);

var_dump($pdo_connection);