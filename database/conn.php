<?php
$servername="localhost";
$username="root";
$password="";
$dbname="login_system";

$conn=mysqli_connect($servername,$username,$password);
$db_conn=mysqli_select_db($conn,$dbname);

if($db_conn){
    // database is connected
   // echo'is connected';
}
else{
    echo'db is not  connected';
}


?>