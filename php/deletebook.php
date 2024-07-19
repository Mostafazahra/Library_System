<?php SESSION_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Delete Book</title>
    <link href="../admin/css/all.min.css" rel="stylesheet" />
    <link href="../admin/css/main1.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200&display=swap"
        rel="stylesheet" />
</head>

<body>
    <nav class="navbar">
        <div class="logo">
            <a href="#" style="color:red"><b>MyBooks</b></a>
        </div>
        <ul class="menu">
            <button id="btn"><i class="fa-solid fa-bars"></i></button>
            <ul class="menu-list" id="ll">
                <li class="home">Home</li>
                <li class="control">
                    Control
                    <ul class="list">
                        <li class=" insert"> Insert
                        </li>
                        <li class="update">Update</li>
                        <li class="delete">Delete</li>

                    </ul>
                <li class="logout"> logout </li>
            </ul>
        </ul>
    </nav>
    <?php   
            if(isset($_SESSION['sta'])){
                echo $_SESSION['sta'];
               unset($_SESSION['sta']);
            }
         ?>
    <section class="forms">

        <form action="../php/deletebook.php" enctype="multipart/form-data" id="delete" method="POST">
            <label for="id6">id</label>
            <input type="text" id="id6" name="search" />
            <input type="submit" class="delete" name="del" value=" Delete" />
        </form>
    </section>
    <footer>
        all right reversed to iti
        Eng: Mostafa Ali Ahmed Zahra
    </footer>
    <script src=" ../admin/js/main1.js"></script>
</body>

</html>

</html> <?php 
 include "db_connection.php";
 if (isset($_POST['del'])) {
   $id6 = $_POST['search'];
   $query ="DELETE FROM books WHERE ids=$id6 ";
   $sql = mysqli_query($conn,$query);
   
   if ($sql) {
      echo '<script type="text/javascript">alert("Data is Deleted")</script>';

        
   }else {
    echo '<script type="text/javascript">alert("Data isnot Deleted")</script>';
       
     }
 } $conn->close();