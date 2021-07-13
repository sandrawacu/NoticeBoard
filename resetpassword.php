<?php
session_start();
//error_reporting(0);
include ('dbconnect.php');
// Code for updating Password
$username="";
$email="";
$newpassword="";
if(isset($_POST['send']))
{
$username=$_POST['username'];
$email=$_POST['email'];
$newpassword=$_POST['password'];
$query=mysqli_query($conn,"update users set password='$newpassword' where username='$username' and email='$email'");
if ($query) {
echo "<script>alert('Password successfully updated.');</script>";
//echo "<script>window.location.href ='index.php'</script>";
    header("location:index.php");
}
else {
  echo "<script>alert('Password not successfully updated.');</script>";  
}
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>contact us</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
</head>
<body style="background-color: cornsilk">
<div class="container">
<div class="row">
  <div class="col-md-9 offset-2">
   <div class="card ">
                    <div class="card-body">
                        <h1 align="center" class="font-weight-bolder text-danger"><b>NIBS ONLINE NOTICE BOARD</b></h1>
                    </div>
                </div>
               <div class="col-md-7 offset-3">
                   <div class="card mt-2">
                       <div class="card-body">
                           <form form="role" method="post" action="#">
                                  <div class="form-group">
                                         <label for="username">Enter usename</label>
                                                <input type="type" class="form-control" id="username"
                                                        name="username" required="true">
                                                              </div>
                               <div class="form-group">
                                   <label for="email">Enter email</label>
                                   <input type="email" class="form-control" id="email"name="email" required="true">
                               </div>
                               <div class="form-group">
                                         <label for="password">Enter new password</label>
                                                <input type="password" class="form-control" id="password"
                                                        name="password" required="true">
                                                              </div>
                                   <div class="form-group">
                                          <button type="submit" name="send" class="btn btn-primary">Reset</button>
                                          </div>
                                 </form>

                                 </div>
                                 </div>
                                 </div>
                                  </div>
    </div>
     <div class="row">
        <div class="col-md-9 offset-4">
<script type="text/javascript">
document.write(
"<p>&copy;  " + new Date().getFullYear() + " Site by :Sandra Wacuka  NIBS TECHNICAL COLLEGE.</p>");
</script>
    </div>
        </div>
    </div>
    </body>
    </html>
                                 