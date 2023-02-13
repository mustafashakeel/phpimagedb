<?php

// Database config
// host db username , password 

$host = "localhost";
$userName = "root";
$password = "root";
$dbName = "imagedb";


$db = new mysqli($host, $userName, $password, $dbName);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
