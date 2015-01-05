<?php
session_start();
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
//$user_id = '1';
$user_id = (int)$_SESSION['user_id'];
//$date = $_POST['date'];

xdebug_var_dump($user_id);

//Send data into db.
//$sql = "INSERT INTO entries (location_id, rating, comment, 'date' ) VALUES ('$location', '$rating', '$comment', '$date')";
$sql = "INSERT INTO entries (location_id, rating, comment, user_id) VALUES ('$location', '$rating', '$comment', '$user_id')";
//					- db -              -    tables  -                                   -   data  -

//Check if valid statement.
if (!mysqli_query($conn, $sql)) {
	die($conn->error);
}

header('Location: index.php');

mysqli_close($conn);
?>