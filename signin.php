<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Sign In Form </title>
  <link rel="stylesheet" type="text/css" href="signin.css">
  <script src="blob.js"></script>
</head> 

<body>
<?php
  include_once 'header.php'
  ?>

  <form name="myForm" action="signin.php" method="POST">
    <div class="login-box">

      <h1> Sign In </h1>

      <div class="textbox">

        <input type="text" placeholder="Username" name="user" value="" required>

      </div>
      <div class="textbox">
        <input type="password" placeholder="Password" name="pass" value="" maxlength="8" required>
      </div>

      <input class="btn" type="submit" name="submit" value="Sign in">
      <p > <a href="signup.html"> Don't have an account ? </a>
      
    </div>
  </form>

</body>
</html>