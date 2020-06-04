<?php
// Connect Ke database
    $DB_HOST = "localhost";
    $DB_DATABASE = "db_starbhakno";
    $DB_USERNAME = "root";
    $DB_PASSWORD = "";
    $DB_PORT = "3306";

// Create Connection
    $db1 = new mysqli($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_DATABASE, $DB_PORT);

// Check Connection
    if($db1->connect_error) {
        die('Connection Failed:' .$conn->connect_error);
    }

?>