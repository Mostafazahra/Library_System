<?php 

session_start(); 

include "db_connection.php";

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['radio'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $username = validate($_POST['username']);

    $password = validate($_POST['password']);
 
   $status = validate($_POST['radio']);
    
    if (empty($username)) {

        header("Location:../php/login&register.php?error=User Name is required");

        exit();

    }else if(empty($password)){

        header("Location:../php/login&register.php?error=Password is required");

        exit();

    }
    else if(empty($status)){

        header("Location:../php/login&register.php?error=status is required");

        exit();
    }
        else{

        $sql = "SELECT * FROM persons WHERE username='$username' AND password='$password' AND status='$status'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['username'] === $username && $row['password'] === $password &&$row['status'] === $status) {

               
                if ($status==="user" ) {
                $_SESSION['username'] = $row['username'];

                $_SESSION['name'] = $row['name'];

                $_SESSION['id'] = $row['id'];     
                header("Location:../php/home.php");
                
                exit();
            
            }else{
                $_SESSION['username'] = $row['username'];

                $_SESSION['name'] = $row['name'];

                $_SESSION['id'] = $row['id'];
                
                header("Location:../php/homeadmin.php");

                       exit();
      
            }}else{

                header("Location:../php/login&register.php?error=Incorect User name or password or status");

                exit();

            }

        }else{

            header("Location:../php/login&register.php?error=Incorect User name or password or status");

            exit();

        }

    }
}else{

    header("Location:../php/login&register.php");

    exit();

}