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

//Store data from form into a variable
$location = $_POST['location'];
$rating = $_POST['rating'];
$comment = $_POST['comment'];
//$date = $_POST['date'];


//Send data into db.
//$sql = "INSERT INTO entries (location_id, rating, comment, 'date' ) VALUES ('$location', '$rating', '$comment', '$date')";
$sql = "INSERT INTO entries (location_id, rating, comment, user_id) VALUES ('$location', '$rating', '$comment', '1')";
//					- db -  table  -           - data  -

//Check if valid statement.
if (!mysqli_query($conn, $sql)) {
	die($conn->error);
}

mysqli_close($conn);
?>