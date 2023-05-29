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
          <li><a href="certificate.php" >Certificate</a></li>
          <li><a href="about.php" >About Us</a></li>
          <li><a href="contact.php" >Contact</a></li>
          <button id="myButton">Profile</button>
          <!-- <li><a href="signup.php" >Signup</a></li>
          <li><a href="signin.php" >Login</a></li> -->
          <!-- <div id="user-btn" class="fas fa-user"></div> -->
        </ul>

</div>

<div id="profile">
         <?php          
            $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
            $select_profile->execute([$user_id]);
            if($select_profile->rowCount() > 0){
            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
         ?>
         <p><?= $fetch_profile["username"]; ?></p>
         <!-- <a href="update_user.php" class="btn">update profile</a> -->
         <!-- <div class="flex-btn">
            <a href="user_register.php" class="option-btn">register</a>
            <a href="user_login.php" class="option-btn">login</a>
         </div> -->
         <a href="components/user_logout.php" class="delete-btn" onclick="return confirm('logout from the website?');">logout</a> 
         <?php
            }else{
         ?>
         <p>please login or register first!</p>
         <div class="flex-btn">
            <a href="user_register.php" class="option-btn">register</a>
            <a href="user_login.php" class="option-btn">login</a>
         </div>
         <?php
            }
         ?>      
         
      </div>
</body>
</html>
