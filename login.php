<?php
session_start();
include_once 'dbConnection.php';

if(isset($_POST['btnsub']))
{
$email = $_POST['email'];
$password = $_POST['password'];




 $q1="SELECT * FROM user WHERE email = '$email' and password = '$password'";
   $result1=mysqli_query($con,$q1);
   if($a=mysqli_fetch_array($result1))
   {
    extract($a);
    $_SESSION["name"] = $name;
    $_SESSION["email"] = $email;
    header("location:account.php?q=1");
   }

}

?>