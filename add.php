<?php
session_start();
?>
<html >
<head>
<link rel="stylesheet" href="bng12.css">
    <title>Creat the account</title>
</head>

<body>
 
<form action="code.php" method="POST">
<div  class="login_system" align="center";> 

<h2>Create an Account</h2>
<input type="text" name="username" placeholder="Enter username"><br>
<input type="text" name="email" placeholder="Enter email"><br>
<input type="password" name="password" placeholder=" Enter Password"><br>

<select name="usertype" placeholder="usertype" >
<br>
<option value="admin">Admin</option>
<option value="executive_admin">Executive Admin</option>
<option value="executive">Executive</option>
</select><br><br>
<button type="submit" name="add_new" >Submit</button><br>
<a href="login.php"> <h5>Alredy Have account </h5>Login</a><br>
<?php
 if(isset($_SESSION['success']) && $_SESSION['success'] !='')
 {
    echo '<h2>'.$_SESSION['success'].'</h2>';
    unset($_SESSION['success']);
 }
 
 if(isset($_SESSION['status']) && $_SESSION['status'] !='')
 {
    echo '<h2>'.$_SESSION['status'].'</h2>';
    unset($_SESSION['status']);
 }
 
 
 ?>
 </div>
 </form>
 
</body>
</html>