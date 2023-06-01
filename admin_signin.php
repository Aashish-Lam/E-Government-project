<?php

include 'connection.php';

session_start();

if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
}else{
    $user_id = '';
};



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Sign In</title>

    <link rel="stylesheet" href="sign.css">
</head>
<body>
<?php
  include 'header.php'
  ?>

  <form name="myForm" action="" method="POST">
    <div class="login-box">

      <h1>Admin Sign In </h1>

      <div class="textbox">

        <input type="email" placeholder="Email" name="email" value="" required>

      </div>
      <div class="textbox">
        <input type="password" placeholder="Password" name="pass" value="" maxlength="8" required>
      </div>

      <input class="btn" type="submit" name="submit" value="Sign in">
      <p><a href="signin.php">Are you a user?</a></p>
    </div>
  </form>


  <script src="script.js"></script>
</body>
</html>