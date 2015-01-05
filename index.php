<!doctype html>
<html lang="sv">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Isinfo</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script src="https://code.jquery.com/jquery-1.11.2.min.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.6.0/semantic.min.js" type="text/javascript"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.6.0/semantic.min.css">
  <!-- <link rel="stylesheet" type="text/css" href="css/styles.css"> -->

</head>
<body>
  <?php
  include 'model.php';
  include 'php-login-minimal/index.php';
  ?>

<!-- <div class="ui large menu">
  <a class="active item">
    <i class="home icon"></i> Home
  </a>
  <a class="item">
    <i class="mail icon"></i> Messages
  </a>1
  <div class="right menu">
    <div class="item">
        <div class="ui primary button">Registrera dig</div>
    </div>
     <div class="item">
        <div class="ui primary button">Logga in</div>
  </div>
</div> -->

<form method="get" action="php-login-minimal/index.php">
  <button type="submit">login page</button>

</form>
<br>
<table class="ui celled table">
  <thead >
    <tr>
      <th class="center aligned">Plats</th>
      <th class="center aligned">Betyg</th> 
      <th class="center aligned">Kommentar</th>
      <th class="center aligned">Användare</th>
      <th class="center aligned">Datum</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($posts as $post) {
      echo "<tr>"
      . "<td class='center aligned'>".$post['location']."</td>"
      . "<td class='center aligned'>".$post['rating']."</td>"
      . "<td class='center aligned'>".$post['comment']."</td>"
      . "<td class='center aligned'>".$post['user_name']."</td>"
      . "<td class='center aligned'>".$post['date']."</td>"
      . "</tr>";
    }
    ?>
  </tbody>
</table>
<?php
  //xdebug_var_dump($_SESSION);
?>
<?php if(isset($_SESSION['isloggedin'])) : ?>

  <div class="ui two column centered grid"> <!--Gives a container to the form-->
    <div class="column">

      <!-- 'action="demo.php" means posts its data to the file named "demo.php".' -->
      <form action="entry_form.php" method="post" class="ui form"/>

      <!-- Dropdown menu for PLATS -->
      <p>Plats: <select name="location" class="ui dropdown">
        <option value="1">Drevviken</option>
        <option value="2">Norrviken</option>
      </select></p>


      <!-- Dropdown menu for BEDÖMNING -->
      <p>Bedömning: <select name="rating" class="ui dropdown">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select></p>

      <!-- Textarea for KOMMENTAR -->
      <p>Kommentar: <textarea rows="4" cols="50" name="comment" class="field">
      </textarea></p>

      <!-- Dropdown menu for DATUM -->
      <?php
  //include 'jQuery UI.php';
      ?>

      <!-- Adds a submit button -->
      <input type="submit" value="Submit" name="submit" />
    </form>
  </div>
</div>
<?php

if(isset($_POST['submit'])) {     //Gör så att den inte öppnar entry_form när formen inte än
  include 'entry_form.php';    
}

?>

<?php endif; ?>
<script src="js/main.js" type="text/javascript"></script>
</body>
</html>