<?php
//$insert = false;
//if(isset($_POST['companyName'])){
    // Set connection variables
    $server = "localhost:3307";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
     echo "Success connecting to the db";

    // Collect post variables
    $companyID = $_POST['companyID'];
    $companyName = $_POST['companyName'];
    $Location = $_POST['Location'];
    $Department = $_POST['Department'];
    $job = $_POST['job'];
    $sql = "INSERT INTO `details`.`details` (`companyID`, `companyName`, `Location`, `Department`, `jobRole`,`dt`) VALUES ('$companyID', '$companyName', '$Location', '$Department', '$job', current_timestamp());";
    echo $sql;

    // Execute the query
    // if($con->query($sql) == true){
    //     // echo "Successfully inserted";

    //     // Flag for successful insertion
    //     $insert = true;
    // }
    // else{
    //     echo "ERROR: $sql <br> $con->error";
    // }

    // Close the database connection
    $con->close();
//}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Company Registration Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Welcome to OASIS Company Registration form</h3>
        <p>Enter your details and submit this form</p>
        <?php
        //if($insert == true){
        //echo "<p class='submitMsg'>Thanks for submitting your form.</p>";
        //}
        ?>
        <form action="index.php" method="post">
            <input type="number" name="companyID" id="companyID" placeholder="Enter your company ID">
            <input type="text" name="companyName" id="companyName" placeholder="Enter your Company Name">
            <input type="text" name="Location" id="Location" placeholder="Enter Location">
            <input type="text" name="Department" id="Department" placeholder="Enter your Department">
            <input type="text" name="job" id="job" placeholder="Enter your Job Role">
            <button class="btn">Submit</button> 
        </form>
    </div>
    <!-- <script src="index.js"></script> -->
    
</body>
</html>
