 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <title>Insert Book </title>
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




         <!-- form insert -->
         <form action="../php/insertbook.php" method="post" id="insert" accept-charset="utf-8"
             enctype="multipart/form-data">
             <label for=" id1">Id</label>
             <input type="text" name="ids" id="id1" />
             <label for=" id2">Book name</label>
             <input type="text" name="title" id="id2" />
             <label for="id3"> Author </label>
             <input type="text" name="author" id="id3" />
             <label for=" id4">Photo's book</label>
             <input type="file" name="image" id="id4" accept="image.*" />

             <label for="id5">URL</label>
             <textarea name="description" id="id5" cols="30" rows="10"></textarea>
             <input type="submit" name="insert" value=" insert" />
         </form>








     </section>
     <footer>
         all right reversed to iti
         Eng: Mostafa Ali Ahmed Zahra
     </footer>
     <script src="../admin/js/main1.js"></script>
 </body>

 </html> <?php 
include 'db_connection.php';
  
if (isset($_POST['insert'])) {

    $ids= $_POST['ids'];
    $title= $_POST['title'];
    $author= $_POST['author'];
    $description= $_POST['description'];
    
    $imgFile = $_FILES['image']['name'];
    $tmp_dir = $_FILES['image']['tmp_name'];
    $imgsize = $_FILES['image']['size'];
 
     if(empty($ids)){
   $errmsg = "Please Enter id.";

}elseif(empty($title)){
   $errmsg = "Please Enter title.";
}elseif(empty($author)){
   $errmsg = "Please Enter author.";
}elseif(empty($imgFile)){
   $errmsg = "Please Enter photo.";
}elseif(empty($description)){
   $errmsg = "Please Enter description.";
}else{
    
    $upload_dir = '../photo/'; // upload directory
 
   $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
  
    
   $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
  
    
   $image = rand(1000,1000000).".".$imgExt;
    
   
   if(in_array($imgExt, $valid_extensions)){   
     if($imgsize < 5000000)    {
     move_uploaded_file($tmp_dir,$upload_dir.$image);
    }
    else{
     $errMSG = "Sorry, your file is too large.";
    }
   }
   else{
    $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";  
   }
   }
  
   if (!isset($errMSG)) {
    
   $sql = "INSERT INTO `books`(`ids`,`title`, `author`, `image`, `description`)

           VALUES ('$ids','$title','$author', '$image','$description')";

    $result = $conn->query($sql);

    if ($result == 1) {
        
       header("Location:../php/homeadmin.php");
    }else{

      echo "Error:". $sql . "<br>". $conn->error;
       
    }

    $conn->close();

 
}

 

 }