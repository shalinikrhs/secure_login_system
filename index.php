<?php
 include('security.php');  
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Welcome</title>
      <link rel="stylesheet"href="bng1.css">
   </head>
   <body>
     <div align="center">
      <?php
         echo '<h1 style="color:blue;,align:center;" > welcome  '.$_SESSION['username'].'</h1>';
         echo '<h3 style="color:blue;align:center;"> u have login to our page</h3>'; 
         ?>
      <form action="logout.php" method= "POST">     
         <button type="submit"  name="logout_btn"> Logout</button>
         <img src="miki3.jpg">
      </form>
</div>
      <!-- for css effect -->
      <style>
        img{
          display:block;

        }
         button{
         background: none;
         border: 2px solid black;
         padding:10px 10px;
         width:100px;
         margin: 10px 10px;
         border-radius: 15px;
         transition: 0.6s;
        }
         button:hover{
         background-color:pink;
        color:rgb(212, 58, 166);
        }    
      
      </style>

   </body>
</html>