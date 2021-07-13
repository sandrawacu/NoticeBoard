<?php
include ('dbconnect.php');
if(isset($_GET['delete']))
{
  $id=$_GET['delete'];
  $connection=("Delete from users where id=$id");
  $_SESSION['message']="Record has been deleted";
 	$_SESSION['msg_type']="Danger";
  header("location:notice.php");
}
?>