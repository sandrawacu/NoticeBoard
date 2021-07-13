<?php
      include ('dbconnect.php');
    $msg="";
      $email="";
      $phone="";
      if(isset($_POST['send']))
      {
      $email=$_POST['email'];
      $phone=$_POST['phone'];
      $insert="insert into sub(email,phone) values('$email','$phone')";
      if(mysqli_query($conn,$insert))
         {
    
echo "<script>alert('subscription successfully.');</script>";
         }
         
      else
      {
        echo "<script>alert('subscription not successfully.');</script>";  
      }
      }
      ?>