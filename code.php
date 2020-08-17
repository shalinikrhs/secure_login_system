
<?php
   include('security.php');
   require "database/conn.php";
   
   //login
   if(isset($_POST['login_btn'])) 
   {
       $email_login =  $_POST['email'];
       $password = md5($_POST['password']);

       $query = "SELECT * FROM admin WHERE email='$email_login' AND password = '$password' ";
       $query_run = mysqli_query($conn, $query);
       $usertype = mysqli_fetch_array($query_run);
   
       if($usertype['usertype'] == 'admin')
       {
           $_SESSION['username'] = $email_login;
           header('Location:index.php');
       }
       else if($usertype['usertype'] == 'executive_admin')
       {
           $_SESSION['username'] = $email_login;
           header('Location:index.php');
       }
       else if($usertype['usertype'] == 'executive')
       {
           $_SESSION['username'] = $email_login;
           header('Location:index.php');
       }
       else
       {
           $_SESSION['status'] = "Invalid User Details";
           header('Location:login.php');
       }
   }
   
   
   //Create New Account
   if(isset($_POST['add_new'])){
       $username = $_POST['username'];
       $email = $_POST['email'];
       $password = md5($_POST['password']);
       $usertype = $_POST['usertype']; 
       $query = "INSERT INTO admin(username, email, password, usertype) VALUES('$username', '$email', '$password', '$usertype')";
       $result = mysqli_query($conn, $query);
   
       if($result){
           $_SESSION['success'] = "Account Created ";
           header('location:add.php');
       }
       else{
           $_SESSION['status'] = "Account Created Failed ";
           header('location:add.php');
       }
   }
   
?>

