 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <title>Update Book</title>
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


     <section class="forms">
         <form action="../php/updatebook.php" method="post" id="search">
             <label for=" id">Id Search</label>
             <input type="text" name="ids" id="id" />
             <input type="submit" value="Search" name="Search" />
         </form>
         <?php
         include "db_connection.php";
         if(isset($_POST['Search'])){
            $id = $_POST['ids'];
            $query = "SELECT * FROM books WHERE 'ids'=$id LIMIT 1";
            $sql = mysqli_query($conn,$query);
            while ($row = mysqli_fetch_array($sql)) {
          ?>
         <form action="../php/updatebook.php" method="post" id="update">
             <label for="id1">Id </label>
             <input type="text" name="ids" id="id1" value="<?php echo $row['ids'];  ?>" />
             <label for="id2">Book name</label>
             <input type="text" name="title" id="id2" value="<?php echo $row['title'];  ?>" />
             <label for=" id3"> Author </label>
             <input type="text" name="author" id="id3" value="<?php echo $row['author']; ?>" />
             <label for=" id4">Photo' s book</label>
             <input type="file" name="image" id="id4" value="<?php echo $row['image'];?>" />
             <label for=" id5">URL</label>
             <input type="text" name=" description" id="id5" value="<?php echo $row['description'];?>">
             </textarea>
             <input type="submit" value="Update" name="update" />
         </form>
         <?php 
          }
         } 
         
         ?>
     </section>
     <footer>
         all right reversed to iti
         Eng: Mostafa Ali Ahmed Zahra
     </footer>
     <script src="../admin/js/main1.js"></script>
 </body>

 </html>
 <?php 
  include "db_connection.php";
   if (isset($_POST['update'])) {
              $id=$_POST['ids'];
            $title = $_POST['title'];
            $author = $_POST['author'];
            $image = $_POST['image'];
              $url = $_POST['description'];
              $que =  "UPDATE `books` SET  `title`='$title', `author`='$author', `image`='$image', `description`='$url' WHERE `ids`='$id' LIMIT 1";
              $sql = $conn->query($que);

                if ($sql){
                    echo '<script type="text/javascript">alert("Data Updated")</script>';
            

                }else {
                    echo '<script type="text/javascript">alert("Data not Updated")</script>';
                      echo   $conn->error;
                               }
    }?>