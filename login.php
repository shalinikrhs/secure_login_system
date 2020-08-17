<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet"href="bng11.css">
    <title>Login page</title>
</head>
<body>


    <form action="code.php" method="POST">
        <div class="login_system" align="center";>
            <h3>Login with your regular account!</h3>        
            <input type="text" name="email" placeholder="Enter your email!!"><br>
            <input type="password" name="password" placeholder="Enter your password"><br>
           <p><b>if u don't have an account??</p>
           <a href="add.php">Create new account</a><br>
           <button type="submit" name="login_btn">LOGIN</button>
        

           <?php
if(isset($_SESSION['status']) && $_SESSION['status'] !="")
{
    echo'<h2 class="errortext" >'.$_SESSION['status'].'</h2>';
    unset($_SESSION['status']);
}
?>
        </div>
    
    
</form>
</body>
</html>