<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin MyBooks </title>
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
                        <li class=" insert"> Insert</li>
                        <li class="update">Update</li>
                        <li class="delete">Delete</li>
                    </ul>
                <li class="logout"> logout </li>
            </ul>
    </nav>

    <section id="books">
        <?php
        session_start();
         include "db_connection.php";
        
        $sql="SELECT * From books";
        $result = mysqli_query($conn,$sql);
        If (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_array($result)){
        $image = $row['image'];
        $image_src = "../photo/".$image;
        ?>

        <div class="card">
            <!--start card-->
            <img src='<?php echo $image_src;  ?>' alt="">
            <?php
            echo "<h4>".$row["ids"]. "<br>".$row["title"]. "<br>" .$row["author"]."</h4>";?>
            <?php echo "<br>".$row["date"]."";?>
            <div>
                <form action="../php/homeadmin.php" method="post" id="book">
                    <input type="submit" value="book.pdf" name="book" />
                </form>
                <?php
                include "db_connection.php";
                if(isset($_POST['book'])){
                $url = $row["description"];
                header("location:$url");
            }
            ?>
            </div>

        </div>
        <!--end card-->
        <?php }}else {
            echo $conn->error; 
        };?>



    </section>
    <footer>
        all right reversed to iti
        Eng: Mostafa Ali Ahmed Zahra
    </footer>
    <script src=" ../admin/js/main1.js">
    </script>
</body>

</html>