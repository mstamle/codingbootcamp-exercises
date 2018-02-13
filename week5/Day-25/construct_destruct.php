<?php


$next_user_id = 0;


class user {
    public $id;
    public $username;
    public $name;
    public $password;
    public $number_of_posts;
    public $time_of_construct = null;

    public function __construct(&$next_user_id,$future_username)
    {
        $this->id = $next_user_id;
        $next_user_id++;

        $this->username = $future_username;
    }
    public function init()
    {
        $this->time_of_construct = time();
        $this->password = uniqid();
    }

    public function dumpMe()
    {
        var_dump($this);
    }
}















?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Construct Destruct</title>
</head>
<body>

<p></p>

</body>
</html>