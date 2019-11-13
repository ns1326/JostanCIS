<?php
/* ==================================================================================
   MySQL Connection information and site wide constants
   PDO - PHP Data Objects
   ------------------------------------------------------------------------------- */
/* Set database constants and connect to the database.
 */
define('DB_USER', '1');
define('DB_PASSWORD', 'jostonchan');
define('DB_NAME', 'teamjoston.db');

$db_name = DB_NAME;
$username = DB_USER;
$password = DB_PASSWORD;
try {
    /* PDO Syntax
     * new PDO( dsn, username, password )
     * dsn = Data Source Name ... for MySQL:
     *     "mysql:dbname=name;host=localhost"
     *     where "name" is the name of the database
     */
    //result: mysql:StudentCourse;host=localhost
    $dsn = "mysql:dbname=" . DB_NAME . ";host=localhost";
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
/* Automatically start the session.
 */
session_start();