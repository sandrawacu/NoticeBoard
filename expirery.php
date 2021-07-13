$timestamp="";
$start_date=date($timestamp);
$expires=strtotime('+14', strtotime($timestamp));

$date_diff=($expires-strtotime($timestamp));

echo "start:".$timestamp."<br>";
echo "Expire".date('y-m-d H-i-s',$expires)."<br>";
echo round($date_fiff,0). "days left"