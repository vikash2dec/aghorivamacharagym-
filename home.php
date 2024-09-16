<?php
session_start();
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aghori Vamachara GYM </title>
</head>
<body>

    <?php
     $userprofile = $_SESSION['user_name'];
    if($userprofile  == true){

    }else{
         header("location:index.php");
    }
    ?>
    <h1>welcome <?php echo $userprofile ?></h1>

    <a href="logout.php">LOGOUT</a>
</body>
</html>