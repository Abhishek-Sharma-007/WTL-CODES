<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
</head>

<?php
if(isset($_POST['create'])){
$a=$_POST["ab"];
$b=$_POST["ac"];
$c=$_POST["ad"];
$d=$_POST["at"];
$e=$_POST["dt"];
$date2 = "12022-06-18";
if($date2<$e){
    echo $b;
}else
{
    echo "Invalid date";
}
echo $a." ".$b." ".$c." ".$d." ".$e;
}
?>
<body>
    <form action="index.php" method="POST">
   Company Id <input type="text" name="ab"><br>
   Company name <input type="text" name="ac"><br>
   Location <input type="text" name="ad"><br>
   Department <input type="text" name="at"><br>
   RegistrationDate <input type="date" name="dt"><br>

   <input type="Submit" name="create">
</form>
</body>
</html>