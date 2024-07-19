 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <link rel="stylesheet" href="../css/all.min.css" />
     <link rel="stylesheet" href="../css/main.css" />
     <link rel="preconnect" href="https://fonts.googleapis.com" />
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
     <link
         href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200&display=swap"
         rel="stylesheet" />

     <title>Library</title>
 </head>

 <body>
     <header>
         <nav class="navbar">
             <div class="logo">
                 <a href="#" style="color:red"><b>MyBooks</b></a>
             </div>
             <ul class="menu">
                 <button id="btn"><i class="fa-solid fa-bars"></i></button>
                 <ul class="menu-list">
                     <li class="login">Login</li>
                     <li class="register">Register</li>
                 </ul>
             </ul>
         </nav>


         <form id="form1" method="post" action="../php/login.php">
             <?php if (isset($_GET['error'])) { ?>

             <p class="errors">
                 <?php echo $_GET['error']; ?>
             </p>

             <?php } ?>
             <input type="text" placeholder="username" autofocus name="username" class="input1" />
             <br />
             <input type="password" class="input2" placeholder="password" name="password" />
             <div>
                 <h3>login as</h3>

                 <input type="radio" id="r1" name="radio" value="user" />
                 <label for="r1" class="la1">user</label>

                 <input type="radio" id="r2" name="radio" value="admin" />
                 <label for="r2" class="la2">admin</label>
             </div>
             <input type="submit" value="login" class="submit" />

         </form>
         <form id="form2" method="post" action="../php/register.php">
             <?php if (isset($_GET['errors'])) { ?>

             <p class="error">
                 <?php echo $_GET['errors']; ?>
             </p>

             <?php } ?>
             <input type="text" placeholder="username" autofocus name="username1" class="input1" />
             <br />
             <input type="password" class="input2" placeholder="password" name="password1" />
             <div>
                 <h3>login as</h3>

                 <input type="radio" id="r1" name="status" value="user" />
                 <label for="r1" class="la1">user</label>

                 <input type="radio" id="r2" name="status" value="admin" />
                 <label for="r2" class="la2">admin</label>
             </div>
             <input type="submit" value="Register" name="submit" class="submit" />
         </form>



     </header>

     <footer>
         all right reversed to iti.
         Eng:Mostafa Ali Ahmed Zahra
     </footer>
     <script src="../js/main.js"></script>

 </body>

 </html>
 <!-- <i class="fa-solid fa-bars"></i> -->