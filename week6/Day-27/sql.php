<?php
// require the database library
require_once 'database.php';

//connect to database world using functions from the libraries
$pdo_connection = db_connect('world');

//var dump to see the result
var_dump($pdo_connection);


//1. Prepare a query

$my_sql_query = "
    SELECT *
    FROM `city`
    WHERE `CountryCode` = 'CZE'
";

$country_code = 'CZE';
$my_sql_query = "
SELECT *
FROM `city`
WHERE `CountryCode` = ?
  AND `Population` > ?
";

//2. Create a statement and get it
$statement = $pdo_connection->prepare($my_sql_query);

//FETCH_ can be followed by OBJ, CLASS, NUM>>..

//3. execute the statement
$statement->execute(['CZE',1000000]);

$statement->setFetchMode(PDO::FETCH_ASSOC);
//4. Fetch the result
$results = $statement->fetchAll();

var_dump($results);


?>

<ul>
    <?php foreach($results as $result) : ?>
        <li>
            <?php echo $result['Name']; ?>
            in the
            <?php echo $result['District']; ?>
            district has a population of
            <?php echo $result['Population']; ?>
        </li>
    <?php endforeach; ?>
</ul>

<?php

$query = "
    SELECT *
    FROM `country`
";
$results = db_query($query);

$query = "
    SELECT *
    FROM `country`
    WHERE `Continent` = ?
      AND `Population` > ?
";
$results = db_query($query, ['Europe', 20000000]);

var_dump($results);
