<?php
session_start();
require('dbconnect.php');
 // Variable To Store Error Message
if (isset($_POST['send']))
{
if (empty($_POST['username']) || empty($_POST['password']))
{
echo "<script>alert('username or Password is empty')</script>";
header("Location:adminlogin.php");
}
else
{
$username=$_POST['username'];
$password=$_POST['password'];
}
// To protect MySQL injection for Security purpose
$username = mysqli_real_escape_string($conn,$username);
$password = mysqli_real_escape_string($conn,$password);

// SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query($conn,"select id,username,password, from users where  username='$username' AND password='$password'");

if($rows = mysqli_num_rows($query))
{
$row = mysqli_fetch_assoc($query);
$user_id=$row['id'];
$username=$row['username'];
$password=$row['password'];

if($row)
{
if($status<1)
{
echo "<script>alert('The account already exist. contact administrator')</script>";
header("Location:login.php");
}
elseif ($status='1')
	{
		$_SESSION['username']=$username;
		$_SESSION['user_id'] = $user_id;
		header("location:createnotice.html");
    }
}
 elseif($rows!=1)
 {
echo "<script>alert('Wrong username or Password try again')</script>";
header("Location:index.php");
}
mysqli_close($conn); // Closing Connection
}
else{
echo "<script>alert('The user does not exist or wrong credentials')</script>";
echo '<script>windows: location="index.php"</script>';
}
}
?>