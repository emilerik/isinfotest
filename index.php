<!doctype html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Isinfo</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->

            <!-- Add your site or application content here -->
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


            ?>
            <!-- <tr>
                <td>Eve</td>
                <td>Jackson</td> 
                <td>94</td>
            </tr> -->
        </table>


    </body>
    </html>