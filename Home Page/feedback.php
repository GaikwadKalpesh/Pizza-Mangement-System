<?php
session_start();

$con=mysqli_connect("localhost","root","","user");

if(mysqli_connect_error()){
   echo"<script>
   alert('cannot connect to database');
                
   window.location.href='home.php';
   </script>";
   exit();
}

 $query = " INSERT INTO `feedback`(`name`, `email`, `mobile`, `message`) VALUES ('$name','$email','$mobile','$message') ";
 echo "$query";
 mysqli_query($con, $query);
 



?>