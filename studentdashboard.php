<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>student dashboard</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
</head>
<body>
<div class="container-fluid" style="background-color: cornsilk">
        <div class="col-md-4 offset-11">
            <nav class="navbar ustify-content-md-between">
                <?php
              if(isset($_SESSION['login_user'])){
              echo $_SESSION['login_user'];
              unset($_SESSION['login_user']);
              }
              ?>
            <nav class="navbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a  class="nav-link" href="logout.php"><i class="fa fa-user"></i>Logout</a></li>
                </ul>
            </nav>
        </div>

    <div class="row mb-5 mt-3">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <img src="images/board.jpeg" class="rounded" width="200">
                    <nav class="navbar">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="studentdashboard.php"><i class="fa fa-book "></i>Dashboard</a></li>
                            <li class="nav-item">
                                <a class="nav-link"href="viewnotice.php"><i class="fa fa-folder-open"></i>View post</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="viewupload.php"><i class="fa fa-folder-open"></i>View uploads</a>
                        </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact us.php" ><i class="fa fa-phone-square"></i>contact us/comment</a>

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
                    <img src="images/nibs.jpg" class="rounded" width="800" height="500">
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