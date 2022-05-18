<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Welcome to the next page</h2>
    <a href="./welcome.php">Previous</a>
    <?php
        session_start();
        if (isset($_SESSION['user'])){
            echo "Welcome, " . $_SESSION['user'];
        }
        else
            echo "Welcome guest!";
    ?>
</body>
</html>