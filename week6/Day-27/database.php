<?php
$db_host = 'localhost';
$db_username = 'root';
$db_password = 'rootroot';
$db_database = 'world';


/**
 * connects to  a database
 *
 * uses the global vars $db_host, $db_username, $db_password
 *
 * @param string $database - name of the database to connect to
 */
function db_connect($database)
{
    // import connection data defined in the global scope
    global $db_host;
    global $db_username;
    global $db_password;

    try
    {
        // try connecting to the database
        $pdo_connection = new PDO(
            'mysql:dbname=' .$database. ';host='.$db_host.';charset=utf8', // connection information
            $db_username, // username
            $db_password // password
        );

        $pdo_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }
    catch (PDOException $e) // if something went wrong in try {}
    {
        //out put the error message
        echo 'Connection failed: '. $e->getMessage();
    }
    return $pdo_connection;
}
/**
 * run a query
 *
 * runs a query using the predefined database
 *
 * @param string $query - query to be run
 * @param array $values - values to be substituted for "?"
 */
function db_query($query, $values = [])
{
    //
    global $db_database;

    $pdo = db_connect($db_database);

    $statement = $pdo->prepare($query); // prepare the query
     // execute the query
    if(false === $statement->execute($values))
    {
        echo '<h1>MySQL error:</h1>';
        var_dump($pdo->errorInfo());
        exit();
    }
    $statement->setFetchMode(PDO::FETCH_ASSOC); // set the type of results
    return $statement->fetchAll(); // get all results as an array
}