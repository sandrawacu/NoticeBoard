<?php
	include('dbconnect.php');
 
	if(ISSET($_POST['update'])){
		$id = $_POST['id'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];
		$end_date = $_POST['end_date'];
        
        $result="UPDATE `notices` SET `subject` = '$subject', `message` = '$message', `end_date` = '$end_date' WHERE `id` = '$id'") or die(mysqli_error());
		$row=mysqli_query($conn,$result )
		header("location: notices.php");
	}
?>