<?php

$db_host = "localhost";
$db_user = "your_db_user";
$db_pass = "your_db_pass";
$db_name = "your_db_name";

// Test MySQL connection
$db = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
if(mysqli_connect_error()) {
    die("Failed to connect with MySQL: ". mysqli_connect_error());
}

?>