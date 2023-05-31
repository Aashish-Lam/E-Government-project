<?php
    
include 'connection.php';

session_start();

if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
}else{
    $user_id = '';
    header('location:signin.php');
};

$select_certificates = $conn->prepare("SELECT * FROM `u_certificates` WHERE user_id = ?");
$select_certificates->execute([$user_id]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="certificate.css">
</head>
<body>
    <?php
        include 'header.php';
    ?>

    <h1 class="c1_title">Your Certificates</h2>

    <ul class="data-list">
    <?php
    // Assuming you have fetched the data from the database and stored it in an array called $dataRows

    foreach ($select_certificates as $row) {
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
            <a href="view_certificate.php?cid=<?= $row['id']; ?>">View Certificate</a>
        </li>

    <?php
    }
    ?>
</ul>



<script src="script.js"></script>
<?php
    include 'footer.php';
    ?>
</body>
</html>