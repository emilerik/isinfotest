<!doctype html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Isinfo</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <p>Hello world! This is HTML5 Boilerplate.</p>
    <?php
    include 'model.php';

    ?>
    <table>
      <tr>
        <th>Plats</th>
        <th>Betyg</th> 
        <th>Kommentar</th>
        <th>Användare</th>
        <th>Datum</th>
    </tr>
    <?php

    foreach ($posts as $post) {
        echo "<tr>"
        . "<td>".$post['location']."</td>"
        . "<td>".$post['rating']."</td>"
        . "<td>".$post['comment']."</td>"
        . "<td>".$post['user_name']."</td>"
        . "<td>".$post['date']."</td>"
        . "</tr>";
    }

// $sql = "INSERT INTO MyGuests (firstname, lastname, email)
// VALUES ('John', 'Doe', 'john@example.com')";

    ?>
        </table>


    </body>
    </html>