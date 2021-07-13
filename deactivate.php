 <?php
  include("dbconnect.php");
 session_start();
if(isset($_GET['deactivate']))
{
    $idurl=$_GET["deactivate"];
               

                         $sql="update  notices set status =0 WHERE id='$idurl'";
                         $result=mysqli_query($conn,$sql);
                            }
header("location:notices.php");
                         ?>