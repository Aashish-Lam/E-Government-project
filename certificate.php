<?php
    
include 'connection.php';

session_start();

if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
}else{
    $user_id = '';
    header('location:signin.php');
};

$select_a_certificates = $conn->prepare("SELECT * FROM `a_certificates` WHERE user_id = ?");
$select_a_certificates->execute([$user_id]);

$select_u_certificates = $conn->prepare("SELECT * FROM `u_certificates` WHERE user_id = ?");
$select_u_certificates->execute([$user_id]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Birth Certficates</title>

    <link rel="stylesheet" href="certificate.css">
</head>
<body>
    <?php
        include 'header.php';
    ?>

    <ul class="data-list">
    <?php
    if($select_u_certificates->rowCount() > 0){?>
        <h1 class="c1_title" style="color:red; font-size: 2rem;">You have <?php echo $select_u_certificates->rowCount(); ?> unapproved registrations!</h1>
        <?php
        };
        if($select_a_certificates->rowCount() > 0){?>

        <h1 class="c1_title">Your Approved Certificates</h2>

        <?php
    foreach ($select_a_certificates as $row) {
        $image = $row['pp_image'];
        $full_name = $row['full_name'];
        $dob = $row['date_of_birth'];
        ?>
        
        <li class="data-item">
            <img src="uploaded_img/<?= $image; ?>" alt="Profile Image">
            <div class="data-details">
                <h3><?php echo $full_name; ?></h3>
                <p>Date of Birth: <?php echo $dob; ?></p>
            </div>
            <a style="color=black" href="view_certificate.php?cid=<?= $row['id']; ?>">View Certificate</a>
        </li>

    <?php
    }
    }
    else{?>
        <h1 class="c1_title" >You don't have any approved certificates!</h1>
        <div style="position: relative; left:43%;" ><a href="birth_form.php" style="font-size: 2rem; color: black;">Register Now!</a></div>
    <?php
    }
    ?>
</ul>

<script src="script.js"></script>
</body>
</html>