<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard for admin</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
</head>
<body style="background-color: cornsilk">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 offset-11">
            <nav class="navbar" justify-content-md-between>
                    <?php
              if(isset($_SESSION['login_user'])){
              echo $_SESSION['login_user'];
              unset($_SESSION['login_user']);
              }
              ?>
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
                            <a class="nav-link" href="deactivated.php"><i class="fa fa-folder-open"></i>Deactivated Notice</a>
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
            <div class="card ">
                <div class="card-body">
                    <h1 align="center" class="font-weight-bolder text-danger"><b>NIBS ONLINE NOTICE BOARD SYSTEM</b></h1>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <center>
                    </center>
                    <img src="images/nibs.jpg" class="rounded" width="800" height="500">
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