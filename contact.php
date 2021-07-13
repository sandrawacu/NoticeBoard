<?php
      include ('dbconnect.php');
$msg="";
      if(isset($_POST['submit']))
      {
      $name=$_POST['name'];
      $email=$_POST['email'];
      $mobile=$_POST['mobile'];
      $subject=$_POST['subject'];
      $message=$_POST['message'];
    
          $insert=("insert into contactus(name,email,mobile,subject,message) values('$name','$email','$mobile','$subject','$message')");
         if(mysqli_query($conn,$insert))
         {
    
echo "<script>alert('Your comment has been received.');</script>";
         }
         
      }
    
    // header("location:studentdashboard.php"); 
        ?>