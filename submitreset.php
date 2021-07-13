<?php
require('dbconnect.php');
if(isset($_post['send']) && $_post['key'] && $_post['reset'])
{
	$email=$_post['email'];
	$password=$_post['password'];
	$select=mysql_cquery("update users set passwor='$password where email=$'email'");
}
?>