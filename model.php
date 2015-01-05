<?php

include 'mysql.php';


$sql = "SELECT users.user_name, entries.comment, entries.rating, entries.date, locations.location\n"
    . "FROM entries\n"
    . "INNER JOIN users\n"
    . "	ON entries.user_id=users.id\n"
    . "INNER JOIN locations\n"
    . "	ON entries.location_id=locations.id"
    . " ORDER BY date DESC";

if(!$result = $conn->query($sql)){
	die('There was an error running the query [' . $conn->error . ']');
}
$posts = array();
while($row = $result->fetch_assoc()){
	$posts[] = $row;
}
// xdebug_var_dump($posts);
?>