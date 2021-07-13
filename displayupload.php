<?php
include ('dbconnect.php');
$query=$db->query("SELECT * FROM Images");
if($query->num_rows>0)
{
 while($row=$query->fetch_assoc()) 
 {
     $imageurl='images/'.$row["filename"];
     
 ?>
<img src="<?php echo "$imageurl;?>" alt="" />
<?php }
}
else{
     ?><p> No image(s) found...</p><?php
}
?>