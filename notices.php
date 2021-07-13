
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>student view notice</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
</head>
<body style="background-color: cornsilk">
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
        <div class="card" mt-2>
            <div class="card-body">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel=heading align-content-center">POSTED NOTICES</h3>
                            <table class="table table-striped table-bordered table-responsive">
                             <thead>
                              <tr>
                               <th>subject</th>
                               <th>Message</th>
                               <th>Date</th>
                                <th> End Date</th>
                                 <th>Action</th>
                              </tr>
                             </head>
                             <tbody>
                                <?php

                        include("dbconnect.php");

                         session_start();
                         $sql="SELECT * FROM notices WHERE status=1";
                         $result=mysqli_query($conn,$sql);

                                   while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
                                   {
                                    ?>

                              <tr>
                               <td><?php echo $row["subject"];?></td>
                               <td><?php echo $row["message"];?></td>
                               <td><?php echo $row["submitted_on"]; ?></td>
                                <td><?php echo $row["end_date"]; ?></td>
                                <td>
                               <a  href="deactivate.php?deactivate=<?php echo $row['id'];?>" class="btn btn-success">Deacivate</a>
                           </td>
                              </tr>
                               <?php } ?>
                             </tbody>
                             </table>

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