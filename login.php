<?php
session_start();
include('connect.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="login.css">
    <title>Aghori Vamachara GYM / Login</title>
</head>
<body>
    <div class="login-1">
        <div class="login-2">
            <a href="index.php">
            <i class="bi bi-arrow-left-circle-fill"></i>
            </a>
            <div class="login-3">
                <img src="">
            </div>
            <div class="login-4">
                <h3>Aghori Vamachara <span>GYM</span></h3>                
            </div>
            <div class="login-5">
                <form action="" method="POST">
                    <div class="login-6">
                        <input type="text" name="username" placeholder="username, phonenumber or email">
                    </div>
                    <div class="login-7">
                        <input type="password" name="password" placeholder="password">
                    </div>
                    <button type="submit" name="submit">Login</button>
                </form>
            </div>
            <div class="login-8">
                <h3>You Don't have account create <span><a href="new_account.php">New Account</a></span></h3>
            </div>
            <div class="login-9">
                <h3><a href="">Forgot password</a></h3>
            </div>
        </div>
    </div>
    

    <?php  

     if(isset($_POST['submit'])){
        $use = $_POST['username'];
        $pass = $_POST['password'];

        $query ="SELECT * FROM user WHERE username='$use' AND password='$pass'";
        $data = mysqli_query($conn, $query);
        $total = mysqli_num_rows($data);

        if($total ==1 ){
            $_SESSION['user_name'] = $use; 
            header('location:home.php');
        }else{
            echo "Login failed";
            // header('location:login.php');
        }
     }

    ?>
    <script>
        
    </script>
</body>
</html>