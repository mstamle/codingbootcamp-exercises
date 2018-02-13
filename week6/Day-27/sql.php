<?php
// require the database library
require_once 'database.php';

//connect to database world using functions from the libraries
$pdo_connection = db_connect('world');

//var dump to see the result
var_dump($pdo_connection);


//1. Prepare a query

// $my_sql_query = "
//     SELECT `city`.*
//     FROM `city`
//     WHERE `city`.`CountryCode` = 'CZE'
// ";

$country_code = 'CZE';
$my_sql_query = "
SELECT *
FROM `city`
WHERE `city`.`CountryCode` = ' ".$country_code."'
";

//2. Create a statement
$statement = $pdo_connection->prepare($my_sql_query);


//FETCH_ can be followed by OBJ, CLASS, NUM>>..

//3. execute the statement
$statement->execute();

$statement->setFetchMode(PDO::FETCH_ASSOC);
//4. Fetch the result


?>
