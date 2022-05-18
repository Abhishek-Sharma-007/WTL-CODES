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
    
    <?php
        session_start();
        if (isset($_SESSION['user'])){
            echo "Welcome, " . $_SESSION['user'];
            session_unset();
            session_destroy();
        }
        else
            echo "Welcome guest!";
    ?>
    <a href="./end.php">Next</a>
</body>
</html>