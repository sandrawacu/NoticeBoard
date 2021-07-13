<?php
session_start();
require('dbconnect.php');
$passworderr="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$myusername = mysqli_real_escape_string($conn,$_POST['username']);
$mypassword = mysqli_real_escape_string($conn,$_POST['password']);

$sql="SELECT * FROM users WHERE username='$myusername' and password='$mypassword'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$active=$row['username'];
$count=mysqli_num_rows($result);
if($count==1)
{
$_SESSION['login_user']=$active;
header("location:studentdashboard.php");
}
else
{
$passworderr="your login name or password is invalid";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>student login</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
</head>
    <body style="background-color: cornsilk">
<div class="container">
    <div class="col-md-9 offset-2">
                <div class="card ">
                    <div class="card-body" style="background-color: cornsilk">
                        <h1 align="center" class="font-weight-bolder text-danger"><b>NIBS ONLINE NOTICE BOARD</b></h1>
                    </div>
                </div>
    <div class="row">
        <div class="col-md-6">
            <a href="adminlogin.php">Admin Login</a>
        </div>
        <div class="col-md-6">
            <a href="subnotices.php">click here to subscribe to notices</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 offset-2">
            <div class="card">
                <div class="card-body">
                    <form form="role" method="post">
                        <div class="form-group">
                            <p class="text-danger"><?php echo $passworderr;?></p>
                            <h4 class="font-weight-bold ">Student Login</h4>
                            <span class="fa fa-user"></span>
                            <label for="username">username</label>
                            <input type="text" class="form-control" id="username"
                                   placeholder="username" name="username" required="true">
                        </div>
                        <div class="form-group">
                            <span class="fa fa-lock"></span>
                            <label for="password">password</label>
                            <input type="password" class="form-control" id="password"
                                   placehoder="password" name="password"required="true">
                        </div>
                        <div class="form-group">
                            <button type="submit" name="send" class="btn btn-success">send</button>
                            <button type="reset" class="btn btn-danger">cancel</button><br><br>
                            <center>
                            <a href="registeruser.php">Register</a><br><br>
                            <a href="resetpassword.php">forgot your password?</a>
                            </center>
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