<?php
$db_host = 'localhost:8080';
$db_username = 'root';
$db_password = 'rootroot';


/**
 * connects to  a database
 *
 * uses the global vars $db_host, $db_username, $db_password
 *
 * @param string $database - name of the database to connect to
 */
function db_connect($database)
{
    global $db_host;
    global $db_username;
    global $db_password;

    try
    {
        // try connecting to the database
        $pdo_connection = new PDO(
            'mysql:dbname=' .$database. ';host=' .$db_host. ';charset=utf8', // connection information
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