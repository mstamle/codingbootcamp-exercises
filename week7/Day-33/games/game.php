<?php

// connect to the database world using PDO
$pdo_connection = new PDO(
    'mysql:dbname=games;host=localhost;charset=utf8', // connection information
    'root', // username
    'rootroot' // password
);

var_dump($pdo_connection);


class game
{
    protected $id = null;
    protected $name = null;
    protected $image_url = null;
    protected $description = null;
    protected $rating = null;
    protected $release_at = null;

    public static function getAllGames()
    {
        $statement = $pdo_connection->prepare("SELECT * FROM game");
        $result = $statement->execute();
        var_dump($result);
    }
}

static::getAllGames();