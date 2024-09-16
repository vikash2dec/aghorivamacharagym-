<?php  
  include("connect.php");
   //$phone = $_POST['phone'];

   $sql ="INSERT INTO `user` (`phone`) VALUES ('123456')";
   $data = mysqli_query($conn, $sql);
   if($data){
       echo "data inserted successfully";
   }else{
       echo "not inserted";
   }


?>