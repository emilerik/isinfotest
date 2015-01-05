<!doctype html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Isinfo</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <script src="https://code.jquery.com/jquery-1.11.2.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.6.0/semantic.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.6.0/semantic.min.css">
    <link rel="stylesheet" href="css/dropdown.css">

</head>
<body>

    <?php

    include 'model.php';
    include 'php-login-minimal/index.php'
    ?>
<form method="get" action="php-login-minimal/index.php">
    <button type="submit">login page</button>
</form>
    <br>
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
</table>

<?php if(isset($_SESSION['isloggedin'])) : ?>

    <!-- 'action="demo.php" means posts its data to the file named "demo.php".' -->
    <form action="entry_form.php" method="post" class="ui form" />

    <!-- Dropdown menu for PLATS -->
    <p>Plats: <select name="location">
      <option value="1">Drevviken</option>
      <option value="2">Norrviken</option>
  </select></p>


  <!-- Dropdown menu for BEDÖMNING -->
  <p>Bedömning: <select name="rating">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
  </select></p>

  <!-- Textarea for KOMMENTAR -->
  <p>Kommentar: <textarea rows="4" cols="50" name="comment">
  </textarea></p>

  <!-- Dropdown menu for DATUM -->
  <?php
// include 'jQuery UI.php';
  ?>

  <!-- Adds a submit button -->
  <input type="submit" value="Submit" name="submit" />
</form>

<?php

if(isset($_POST['submit'])) {
    include 'entry_form.php';    
}

?>

<?php endif; ?>

</body>
</html>