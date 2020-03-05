<?php
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
$emailid = filter_input(INPUT_POST, 'emailid');
$mobile =  filter_input(INPUT_POST,'mobile');

if (!empty($username)){
   
     if(!empty($password)){
        
            $host = "localhost";
       	    $dbusername = "root"; 
       	    $dbpassword = "";     
            $dbname = "youtube";

            $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

            if(mysqli_connect_error()){
                  die('Connect Error ( '. mysqli_connect_error() .')' . mysqli_connect_error());
            }
            else{
                 $sql = "INSERT INTO signnup (username, password, emailid, mobile) values ('$username','$password', '$emailid', '$mobile')";
                 if($conn->query($sql)){
                     echo "New record is inserted successfully";
                 }
                 else{
                     echo "Error" . $sql . "<br>" . $conn->error;
                 }
                   $conn->close();
       }
   }
}
else{
    echo "Username should not be empty";
    die();
}
?>