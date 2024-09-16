<?php
include('connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Aghori Vamachara GYM / Login</title>
</head>
<body>
    <div class="login-1">
        <div class="login-2">
            <div class="login-3">
                <img src="">
            </div>
            <div class="login-4">
                <h3>Aghori Vamachara <span>GYM</span></h3>                
            </div>
            <div class="login-5">
                <form action="" method="POST">
                    <div class="login-6">
                        <input type="number" name="phone" placeholder="Phone Number">
                    </div>
                    <button type="submit" name="submit">Send Code</button>
                </form>
            </div>
            <div class="login-8">
                <h3>You have already account <span><a href="login.php">Login</a></span></h3>
            </div>
        </div>
    </div>

   

    <?php  

     if(isset($_POST['submit'])){
        //$phone = $_POST['phone'];
        $phone = $_POST['phone'];
        $sql ="INSERT INTO `user` (`phone`) VALUES ('$phone')";
        $data = mysqli_query($conn, $sql);
        if($data){
            header("location:login.php");
        }else{
            header("location:new_account.php");
        }

     }

    ?>
        
    
</body>
</html>