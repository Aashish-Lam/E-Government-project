<?php
    if(isset($message)){
        foreach($message as $message){
          echo '
          <div class="message">
              <span>'.$message.'</span>
              <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
          </div>
          ';
      }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="header.css">
     <!-- font awesome cdn link  -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
<div class="nav">
        <div class="headLogo">
          <a href="#"><img class="loogo" src="logo.png" alt="headLogo"></a>
        </div>
        <ul class="nav-links">
          <li><a href="index.php" >Home</a></li>
          <li><a href="#" >Contacts</a></li>
          <li><a href="signup.php" >Signup</a></li>
          <li><a href="signin.php" >Login</a></li>
        </ul>
      </div>
</body>
</html>
