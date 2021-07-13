<?php
      include ('dbconnect.php');
      $username="";
      $email="";
      $password="";
      $telephone="";
      if(isset($_POST['register']))
      {
      $username=$_POST['username'];
      $email=$_POST['email'];
      $password=$_POST['password'];
      $telephone=$_POST['tel'];
      }
      $insert="insert into users(username,email,password,telephone) values('$username','$email','$password','$telephone')";
      mysqli_query($conn,$insert);
      header("location:index.php")
      ?>