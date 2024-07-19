<?php
 include "db_connection.php";


    $username = $_POST['username1'];

    $password = $_POST['password1'];

    $status = $_POST['status'];

if (isset($_POST['submit'])) {

         if(empty($username)){
   $errmsg = "Please Enter username.";
    exit();
}elseif(empty($password)){
   $errmsg = "Please Enter password.";
   exit();
}elseif(empty($status)){
   $errmsg = "Please Enter status.";
   exit();
  } 

    $sql = "INSERT INTO `persons`(`username`,`password`, `status`) 

           VALUES ('$username','$password','$status')";

    $result = $conn->query($sql);

    if ($result == 1) {
        
       header("Location:../php/homeadmin.php");
    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    }

    $conn->close();

  } 

?>