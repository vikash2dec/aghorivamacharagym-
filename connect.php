<?php
$localhost ="localhost";
$username = "root";
$password = "";
$database = "aghori_vamachara_gym";

$conn = mysqli_connect($localhost,$username,$password,$database);
if($conn){
    
}else{
    echo "not connected";
}
?>