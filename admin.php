<?php
session_start();
require('dbconnect.php');

if($_SERVER["REQUEST_METHOD"]=="POST"
{
$myusername = mysqli_real_escape_string($db,$_POST['username']);
$mypassword = mysqli_real_escape_string($db,$_POST['password');

$sql="SELECT id FROM admin WHERE username='$myusername' and password='$mypassword'";
$result=mysqli_querry($db,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$active=$row['active'];

$count=mysqli_num_rows($result);
if($count==1)
{
session_register("myusername");
$_SESSION['login_user']=$myusername;
header("location:admn dashboard.html");
}
else
{
$error="your login name or password is invalid";
}
}
?>