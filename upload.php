<?php
include ('dbconnect.php');
$name="";
$targetDir="";
$targetfile="";
if(isset($_POST["upload"]))
{
    $statusMsg='';
//file upload path
$name=$_FILES['imageupload']['name'];
$targetDir="images/";
$targetfile=$targetDir.basename($_FILES['imageupload']['name']);
$fileType=pathinfo($targetfile,PATHINFO_EXTENSION);
    
 $allowtypes=array('jpg','png','jpeg','gif','pdf');
    
    if(in_array($fileType,$allowtypes))
    {
        //$insert image file name to the datbase
            $insert="INSERT into images(filename,status) values('".$name."',1)";
            mysqli_query($conn,$insert);
        //upload file to server
        move_uploaded_file($_FILES["imageupload"]["tmp_name"],$targetfile);
        
        }
    }
header("location:uploadadmn.php");
?>