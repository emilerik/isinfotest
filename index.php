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
  <link rel="stylesheet" type="text/css" href="css/styles.css">

</head>
<body>
  <?php
  include 'model.php';
  ?>

  <!-- Huvudmeny inkl registrera och logga in -->

  <div style="width:50%; margin: 0 auto; padding:20px"> 
    <?php
    include 'php-login-minimal/index.php';
    ?>
    <button type="button" onclick="registerModal()" class="ui blue button">Registrera dig</button>
  </div>

  <div class="ui modal">
   <!-- register form -->
   <form method="post" action="php-login-minimal/register.php" name="registerform" class="ui form" style="padding: 40px">

    <h1 class="ui centered header">Välkommen</h1><br>

    <!-- the user name input field uses a HTML5 pattern check -->
    <div class="field">
      <label for="login_input_username">Användarnamn (endast bokstäver och siffror, 2 till 64 tecken)</label>
      <input id="login_input_username" placeholder="Användarnamn..." class="ui input" class="login_input" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" required />
    </div>

    <!-- the email input field uses a HTML5 email type check -->
    <div class="field">
      <label for="login_input_email">E-mail</label>
      <input id="login_input_email" placeholder="E-mail..." class="ui input" class="login_input" type="email" name="user_email" required />
    </div>

    <div class="field">
      <label for="login_input_password_new">Lösenord (min. 6 tecken)</label>
      <input id="login_input_password_new" placeholder="Lösenord..." class="ui input" class="login_input" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" />
    </div>

    <div class="field">
      <label for="login_input_password_repeat">Upprepa lösenord</label>
      <input id="login_input_password_repeat" placeholder="Upprepa lösenord..." class="ui input" class="login_input" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" />
    </div>
    <input class="ui blue button" type="submit"  name="register" value="OK" />

  </form>
</div>
</div>
</div>

<div class="ui two column centered grid"> <!--Gives a container to the entries table-->
  <div class="column">
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
  </div>
</div>

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

<script type="text/javascript">
$("#result").load("not_logged_in.php #hejsan");
</script>



<script src="js/main.js" type="text/javascript"></script>
</body>
</html>