<?php

$datatype="";
$data="";


if($_SERVER['REQUEST_METHOD'] == "POST"){

	$datatype = isset($_POST['datatype']) ? $_POST['datatype'] : '0';
	$data = isset($_POST['data']) ? $_POST['data'] : 'hello';

}else if($_SERVER['REQUEST_METHOD']== "GET"){

	$datatype = isset($_GET['datatype']) ? $_GET['datatype'] : '0';
	$data = isset($_GET['data']) ? $_GET['data'] : 'hello';

}else{

		echo json_encode(array('code'=>1100,'message'=>'Not support'));
		die();
}
$return_msg="+IP784C2F785000";
//$return_msg_sum1=dechex(0x78^0x4c^0x2f^0x78^0x50^0x00);
$return_msg_sum1=0x78^0x4c^0x2f^0x78^0x50^0x00;
$sum1=sprintf("%02x",$return_msg_sum1);
$showtime=date("Y-m-d H:i:s");
//$time_msg="1006170C00";
//$return_msg_sum2=dechex(0x10^0x06^0x17^0x0c^0x00);
//$return_msg_sum2=(0x10^0x06^0x17^0x0c^0x00);

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

$return_msg_sum2=$year^$month^$day^$hour^$minutes;
$sum2=sprintf("%02x",$return_msg_sum2);
$return_msg_end="OK";

$return_msg_new=$return_msg.$sum1.$hyear.$hmonth.$hday.$hhour.$hminutes.$sum2.$return_msg_end;

file_put_contents("log.txt",$showtime." datatype=".$datatype." data=".$data.PHP_EOL,FILE_APPEND);
#echo json_encode(array('code'=>1001,'message'=>'upload ok: data='.$data));
echo strtoupper($return_msg_new);
// $watch_imei ='';
// $watch_customerId ='';
// $watch_bp = '';
// $watch_bpm = '';
// $watch_dataString = '';

// if($_SERVER['REQUEST_METHOD'] == "POST"){
// 	if($_POST['key']!= 'AIzaSyCe3W5tKRwQ6155IbXvoJpVQC4MxOU3DQQ'){
// 		//echo 'Error key!';
// 		echo json_encode(array('code'=>1009,'message'=>'Error key'));
// 		die();
// 	}
// 	$watch_imei = isset($_POST['rimei']) ? $_POST['rimei'] : '001';
// 	$watch_customerId = isset($_POST['rcustomerId']) ? $_POST['rcustomerId'] : '001';
// 	$watch_bp = isset($_POST['rbp']) ? $_POST['rbp'] : '001';
// 	$watch_bpm = isset($_POST['rbpm']) ? $_POST['rbpm'] : '001';
// 	$watch_dataString = isset($_POST['rdataString']) ? $_POST['rdataString'] : '001';

// }else if($_SERVER['REQUEST_METHOD']== "GET"){
// 	if($_GET['key']!= 'AIzaSyCe3W5tKRwQ6155IbXvoJpVQC4MxOU3DQQ'){
// 		//echo 'Error key!';
// 		echo json_encode(array('code'=>1009,'message'=>'Error key'));
// 		die();
// 	}
// 	$watch_imei = isset($_GET['rimei']) ? $_GET['rimei'] : '001';
// 	$watch_customerId = isset($_GET['rcustomerId']) ? $_GET['rcustomerId'] : '001';
// 	$watch_bp = isset($_GET['rbp']) ? $_GET['rbp'] : '001';
// 	$watch_bpm = isset($_GET['rbpm']) ? $_GET['rbpm'] : '001';
// 	$watch_dataString = isset($_GET['rdataString']) ? $_GET['rdataString'] : '001';
// }else{

// 		echo json_encode(array('code'=>1100,'message'=>'Not support'));
// 		die();
// }

//echo $watch_time.'hello'.$watch_userid.'hello'.$watch_imei;
//file_put_contents("log.txt",$_GET['c_datetime'].','.$_GET['c_userid'].','.$_GET['c_imei']);
// mysql_connect("localhost:3306","root","123456");
// mysql_query("SET NAMES utf8");
// mysql_select_db("fota");
// //$sql=mysql_query("insert into WatchLocations (userid,longitude,latitude,datetime) values ($watch_imei,'99.99','99.22',$watch_time)");
// $sql=mysql_query('insert into bp_demo (imei,bp,bpm,time,customerId,dataString) values("' . $watch_imei . '","' . $watch_bp . '","' . $watch_bpm . '","2016","' . $watch_customerId . '","' . $watch_dataString . '")');
// //while($row=mysql_fetch_array($sql))
// //$output[]=$row;
// //$result = mysql_fetch_array ( $sql );
// //echo $sql;
// mysql_close();
// if($sql){
// 	echo json_encode(array('code'=>1002,'message'=>'upload success'));
// 	die();
// }else{
// 	echo json_encode(array('code'=>1004,'message'=>'upload fail'));
// 	die();
// }
// //if(is_null($output)){
// //echo json_encode(array('code'=>1007,'message'=>'upload fail'));
// //die();
// //}
// //print(json_encode($output,true));

// //echo $temp_str;


?>
