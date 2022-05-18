<?php
    if(count($_COOKIE) > 0)
        echo "Cookies are enabled.";
    else
        echo "Cookies are not enabled";

    $cookie_name = "user";
    $cookie_value = "Jyoti";
    //SET the cookie
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

    //DELETE The cookie
    setcookie($cookie_name, $cookie_value, time(), "/");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <?php
        if(isset($_COOKIE[$cookie_name])) {
            $nm = $_COOKIE[$cookie_name];
            echo $nm;
            }
        else 
            echo "Cookie is not set";
    ?>
</body>
</html>