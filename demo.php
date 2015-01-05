<?php

//declare variables for database
$db = "isinfo";
$host = "localhost";
$user = "emil";
$password = "emil123";

//Connects to database
$conn = new mysqli($host, $user, $password, $db);
$conn->set_charset("utf8");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//Store data from form into a variable
$value = $_POST['test_textbox'];

//Send data into db.
$sql = "INSERT INTO test (test_textbox) VALUES ('$value')";
//					- db -  table  -           - data  -

//Check if valid statement.
if (!mysqli_query($conn, $sql)) {
	die($conn->error);
}

mysqli_close($conn);
?>