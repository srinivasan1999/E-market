<?php
   $uname = $_POST['username'];
   $pass = $_POST['password'];
   
   $sql = "select * from signnup where username = '$uname'";

   $conn = mysqli_connect("localhost","root","");
   if(!$conn){
      $error = "Error connecting database...";
   }
   mysqli_select_db($conn,"youtube");
   $result = mysqli_query($conn,$sql);
   $rows = mysqli_fetch_array($result);
   if($rows){
      if($rows["password"] == $pass ){
         echo "Welcome".$uname."!!!!";
        }
      else {
         echo "Invalid Password";
        
      }
   }
   else {
         echo "Invalid Username";
    }
?> 