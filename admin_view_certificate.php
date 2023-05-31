<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "birth_certificates";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the database
$sql = "SELECT * FROM u_certificates ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

$row_count = $result->num_rows;
if ($row_count) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        $full_name = $row["full_name"];
        $dob = $row["date_of_birth"];
        $tob = date("h:i A", strtotime($row["time_of_birth"]));
        $pp_image = $row["pp_image"];
        $doc_image = $row["document_image"];
        $c_image = $row["citizenship_image"];
        $gender = $row["gender"];
        $father_name = $row["father_name"];
        $mother_name = $row["mother_name"];
        $grandfather_name = $row["grandfather_name"];
        $p_city = $row["p_city"];
        $p_ward = $row["p_ward"];
        $p_district = $row["p_district"];
        $p_municipality = $row["p_municipality"];
        $p_province = $row["p_province"];
    }
} else {
    echo "0 results";
}
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Birth Certificate</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12pt;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
            border: 1px solid #ddd;
        }
        h1 {
            font-size: 24pt;
            text-align: center;
            margin: 0;
            padding: 0;
        }
        h2 {
            font-size: 18pt;
            margin: 20px 0 10px;
            padding: 0;
        }
        .info {
            margin: 10px 0;
        }
        label {
            display: inline-block;
            width: 120px;
            font-weight: bold;
        }

        img {
            height: 200px;
            width: 200px;
            float: right;
        }

        #img2 {
            position: absolute;
            right: 25rem;
            top: 17rem;
            width: 350px;
            height: 250px;
        }

        #img3 {
            position: absolute;
            right: 25rem;
            top: 33rem;
            width: 350px;
            height: 250px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>BIRTH CERTIFICATE</h1>

        <img src="uploaded_img/<?= $pp_image; ?>" alt="" id="img1">
        <img src="uploaded_img/<?= $doc_image; ?>" alt="" id="img2">
        <img src="uploaded_img/<?= $c_image; ?>" alt="" id="img3">

        <h2>Full Name</h2>
        <p class="info"><?php echo $full_name; ?></p>
        <h2>Date of Birth</h2>
        <p class="info"><?php echo $dob; ?></p>
        <h2>Time of Birth</h2>
        <p class="info"><?php echo $tob; ?></p>
        <h2>Gender</h2>
        <p class="info"><?php echo $gender; ?></p>
        <h2>Father's Name</h2>
        <p class="info"><?php echo $father_name; ?></p>
        <h2>Mother's Name</h2>
        <p class="info"><?php echo $mother_name; ?></p>
        <h2>Grandfather's Name</h2>
        <p class="info"><?php echo $grandfather_name; ?></p>
        <h2>City/Village</h2>
        <p class="info"><?php echo $p_city; ?></p>
        <h2>Ward Number</h2>
        <p class="info"><?php echo $p_ward; ?></p>
        <h2>District</h2>
        <p class="info"><?php echo $p_district; ?></p>
        <h2>Municipality</h2>
        <p class="info"><?php echo $p_municipality; ?></p>
        <h2>Province</h2>
        <p class="info"><?php echo $p_province; ?></p>
    </div>
    </div>
</body>
</html>
