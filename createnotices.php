<?php
include ('dbconnect.php');
$subject="";
$message="";
if(isset($_POST['upload']))
{
$subject=$_POST['subject'];
$message=$_POST['message'];
$end_date=$_POST['date'];
$insert="insert into notices (subject,message,end_date) values('$_POST[subject]','$_POST[message]','$_POST[date]')";
if( mysqli_query($conn,$insert))
{
echo "<script>alert('successful upload the notice');</script>";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Notices</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
</head>
<body style="background-color: cornsilk">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 offset-11">
            <nav class="navbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a  class="nav-link" href="logout.php"><i class="fa fa-user"></i>Logout</a></li>
                </ul>
            </nav>
        </div>
    </div>
   <div class="row mb-5">
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <img src="images/board.jpeg" class="rounded" width="200">
                <nav class="navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="dashboard admn.php"><i class="fa fa-book "></i>Dashboard</a></li>
                        <li class="nav-item">
                            <a class="nav-link" href="createnotices.php"><i class="fa fa-folder-open"></i>createnotice</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sendmessage.php"><i class="fa fa-folder-open"></i>Send messages</a>
                        </li>
                        <li class="nav-item">
                            <a  class="nav-link" href="notices.php" ><i class="fa fa-phone-square"></i>Notices</a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" href="uploadadmn.php"><i class="fa fa-folder-open"></i>Uploads</a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" href="deactivated.php"><i class="fa fa-folder-open"></i>Deactivated Notce</a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" href="viewcomment.php"><i class="fa fa-folder-open"></i>View Comments</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
            <div class="col-md-9">
                <div class="card mb-2">
                    <div class="card-body">
                        <h1 align="center" class="font-weight-bolder text-danger"><b>NIBS ONLINE NOTICE BOARD</b></h1>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form form="form-role" method="post">
                                <div class="form-group">
                                    <label for="Subject"><b>Subject</b></label>
                                    <input type="text" class="form-control" name="subject" id="subject">
                                    <label for="message"><b>Message</b></label>
                                    <textarea class="form-control" name="message" id="message" placeholder="message" rows="3" cols="30"></textarea
                                    <label for="Subject"><b>Expiry Date</b></label>
                                    <input type="date" class="form-control" name="date" id="subject">
                                    <div class="form-group">
                                        <button type="submit" name="upload" class="btn btn-success">Upload</button>
                                    </div>
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