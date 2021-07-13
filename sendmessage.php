<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Send Message</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
</head>
<body style="background-color:cornsilk">
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
                <div class="card mb-2">
                    <div class="card-body">
                        <h1 align="center" class="font-weight-bolder text-danger"><b>NIBS ONLINE NOTICE BOARD</b></h1>
                    </div>
                </div>
        <div class="col-md-12">
            <div class="card mt-2">
                <div class="card-body">
                    <form action="message.php" method="post" form="form-role">
                        <div class="form-group">
                            <label for="message"><b>Message</b></label>
                            
                           
                            
                            
                                 <textarea class="form-control" id="message" name="message" rows="3" cols="30" required>
                                                                   </textarea>  
                              
                               
                                
                                
                                
                                
                                <label for="to"><b>To</b></label>
                            
                             <?php
                            include ('dbconnect.php');
                            
                            $result=mysqli_query($conn,'SELECT phone FROM sub');
                            $num=mysqli_num_rows($result);
                            
                            
                            while($row=$result->fetch_assoc()){
                            
                            ?>
                                <textarea class="form-control" id="to" rows="3" name="to" cols="20" required>
                            
                             <?php echo $row['phone']; ?>
                                     
</textarea>
                                <?php 
                            }?>
                                
                            </br>
                            <div class="form-group">
                             <input type="submit" name="send" value="send" class="btn btn-success"/>
                            </div>
                    </form>
                        </div>
                </div>
            </div>
            
        </div>
    </div>
        <div class="col-md-9 offset-4">
<script type="text/javascript">
document.write(
"<p>&copy;  " + new Date().getFullYear() + " Site by :Sandra Wacuka  NIBS TECHNICAL COLLEGE.</p>");
</script>
    </div>
        </div>
</body>
</html>