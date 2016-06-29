<?php

$devicetype="";
$data="";


if($_SERVER['REQUEST_METHOD'] == "POST"){

	$devicetype = isset($_POST['devicetype']) ? $_POST['devicetype'] : '0';
	$data = isset($_POST['data']) ? $_POST['data'] : 'hello';

}else if($_SERVER['REQUEST_METHOD']== "GET"){

	$devicetype = isset($_GET['devicetype']) ? $_GET['devicetype'] : '0';
	$data = isset($_GET['data']) ? $_GET['data'] : 'hello';

}else{

		echo json_encode(array('code'=>1100,'message'=>'Not support'));
		die();
}

mysql_connect("localhost:3306","root","huayingtekmysql");
mysql_query("SET NAMES utf8");
mysql_select_db("health");
//$sql=mysql_query("insert into WatchLocations (userid,longitude,latitude,datetime) values ($watch_imei,'99.:99','99.22',$watch_time)");
if($devicetype == '1'){
	$sql=mysql_query("select * from gsm_bg");
}else{
	$sql=mysql_query("select * from gsm_bp");
}
while($row=mysql_fetch_assoc($sql))
$output[]=$row;

mysql_close();
if(is_null($output)){
echo json_encode(array('code'=>1008,'message'=>'No data'));
die();
}
print(json_encode($output,true));



?>
