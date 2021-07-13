<?php
      include ('dbconnect.php');  
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
             <div class="col-md-6 offset-3">
            <div class="card mt-2">
                <div class="card-body">
                    <form form="role" method="post" action="subscribe.php">
                        <div class="form-group">
                            <h4 class="font-weight-bold ">SUBSCRIBE TO NOTICES</h4>
                            <span class="fa fa-user"></span>
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email"
                                   placeholder="email" name="email" required="true">
                        </div>
                        <div class="form-group">
                            <span class="fa fa-lock"></span>
                            <label for="phone">Phone</label>
                            <input type="phone" class="form-control" id="phone"
                                   placehoder="phone" name="phone"required="true">
                        </div>
                        <div class="form-group">
                            <button type="submit" name="send" class="btn btn-success">subscribe</button>
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