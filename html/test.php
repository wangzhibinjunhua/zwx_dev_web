
<?php
echo '123'.'/'.'222';
die();
echo 16^6^23^13^37;
echo '</br>';
echo (0x10^0x06^0x17^0x0d^0x28);
echo '</br>';
echo dechex(0x10^0x06^0x17^0x0d^0x28);
echo '</br>';
$data_time_array=getDate(time());
$year=substr($data_time_array[year],2,2);
$hyear=sprintf("%02x",$year);
$month=$data_time_array[mon];
$hmonth=sprintf("%02x",$month);
$day=$data_time_array[mday];
$hday=sprintf("%02x",$day);

$hour=$data_time_array[hours];
$hhour=sprintf("%02x",$hour);
$minutes=$data_time_array[minutes];
$hminutes=sprintf("%02x",$minutes);

echo $hyear." ".$hmonth." ".$hday." ".$hhour." ".$hminutes." </br>";
$return_msg_sum2=($year^$month^$day^$hour^$minutes);
echo $return_msg_sum2." </br>";
$sum2=sprintf("%02x",$return_msg_sum2);
echo $sum2;
?>
