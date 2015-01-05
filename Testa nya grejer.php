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

  <button type="button" onclick="myFunction()" class="ui button">Try it</button>

  <div class="ui modal">
   <!-- register form -->
   <form method="post" action="register.php" name="registerform" class="ui form" style="padding: 40px">


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
    <input class="ui blue button" type="submit"  name="register" value="Registrera" />

  </form>
</div>

<script src="js/main.js" type="text/javascript"></script>
</body>
</html>