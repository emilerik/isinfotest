<?php

$db = "isinfo";
$host = "localhost";
$user = "emil";
$password = "emil123";


$conn = new mysqli($host, $user, $password, $db);
$conn->set_charset("utf8");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>