<?php
      include ('dbconnect.php');  
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
<div class="container-fluid">
    <div class="container-fluid" >
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
        <div class="row mb-5 mt-3">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <img src="images/board.jpeg" class="rounded-circle" width="200">
                        <nav class="navbar">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="studentdashboard.php"><i class="fa fa-book "></i>Dashboard</a></li>
                                <li class="nav-item">
                                    <a class="nav-link"href="viewnotice.php"><i class="fa fa-folder-open"></i>View post</a>
                                </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="viewupload.php"><i class="fa fa-folder-open"></i>View uploads</a>
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
        <div class="contact">
            <div>
                <div>
                    <div class="contact">
                        <h2>LOCATION</h2>
                        <div class="address">
                            <span><span>A</span>ddress:</span>
                            <p>NIBS TECHNICAL COLLEGE</p>
                            <span><span>P</span>hone <span>N</span>umber:</span>
                            <p>P.o Box 1060-10100,<br/>Ruiru</p>
                            <p>Telephone number:<br/>0706442327</p>
                        </div>
                        <h3><span>F</span>or <span>A</span>ny <span>I</span>nquiries, <span>P</span>lease <span>F</span>ill <span>o</span>ut <span>T</span>he <span>F</span>orm <span>B</span>elow.</h3>
                        <form class="form-horizontal" method="post"  action="contact.php">
                            <table class="table">
                                <tr>
                                    <td><label for="name"><span>N</span>ame:</label></td>
                                    <td><input type="text" name="name" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td><label for="email"><span>E</span>mail:</label></td>
                                    <td><input type="email" name="email" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td><label for="mobile"><span>M</span>obile:</label></td>
                                    <td><input type="text" name="mobile" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td><label for="subject"><span>S</span>ubject:</label></td>
                                    <td><input type="text" name="subject" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td><label for="message"><span>M</span>essage:</label></td>
                                    <td><textarea name="message" cols="30" rows="5" class="form-control"></textarea></td>
                                </tr>
                            </table>
                            <input type="submit" value="Send" name="submit">
                        </form>
                    </div>
                </div>
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