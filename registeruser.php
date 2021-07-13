<?php
include ('dbconnect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>register users</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
</head>
<body style="background-color: cornsilk">
<div class="container-fluid" >
            <div class="col-md-9 offset-2">
                <div class="card ">
                    <div class="card-body">
                        <h1 align="center" class="font-weight-bolder text-danger"><b>NIBS ONLINE NOTICE BOARD</b></h1>
                    </div>
                </div>
                <div class="col-md-7 offset-3">
                    <div class="card mt-2">
                        <div class="card-body">
                            <form form="form-role" method="post" action="register2.php">
                                <div class="form-group">
                                    <label for="username"><b>username</b></label>
                                    <input type="text" class="form-control" id="username" name="username">
                                    <label for="phone number"><b>phone number</b></label>
                                    <input type="tel" class="form-control" id="phone number" name="tel" maxlength="10" minlength="10"/>
                                    <label for="email"><b>Email</b></label>
                                    <input type="email" class="form-control" id="email" name="email">
                                    <label for="password"><b>password</b></label>
                                    <input type="password" class="form-control" id="password" name="password">
                                      <label for="confirm password"><b> confirm password</b></label>
                                           <input type="password" class="form-control" id="password" name="password">
                                           </div>
                                           <center>
                                    <div class="form-group">
                                        <button type="submit" name="register" class="btn btn-success">Register</button>
                                    </div>
                                    </center>
                                </div>
                            </form>
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