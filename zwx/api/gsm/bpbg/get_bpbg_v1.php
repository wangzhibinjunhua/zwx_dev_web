<?php
require_once('/home/work/wzb/project/release/common/db_config.php');
$devicetype="";
$time="";
$count="";
$sn="";
$user="";

if($_SERVER['REQUEST_METHOD'] == "POST"){

	$devicetype = isset($_POST['devicetype']) ? $_POST['devicetype'] : '0';
	$time = isset($_POST['time']) ? $_POST['time'] : '2000-1-1 12:00:00';
	$sn = isset($_POST['sn']) ? $_POST['sn'] : '0';
	$count = isset($_POST['count']) ? $_POST['count'] : 1;
	$user = isset($_POST['user']) ? $_POST['user'] : '2';
}else if($_SERVER['REQUEST_METHOD']== "GET"){

	$devicetype = isset($_GET['devicetype']) ? $_GET['devicetype'] : '0';
	$time = isset($_GET['time']) ? $_GET['time'] : '2000-1-1 12:00:00';
	$sn = isset($_GET['sn']) ? $_GET['sn'] : '0';
	$count = isset($_GET['count']) ? $_GET['count'] : 1;
	$user = isset($_GET['user']) ? $_GET['user'] : '2';
}else{

		echo json_encode(array('code'=>1100,'message'=>'Not support'));
		die();
}

//参数判断
if(!($devicetype == '1' || $devicetype == '2')){
	echo json_encode(array('code'=>1006,'message'=>'devicetype not support'));
	die();
}

if($sn == '0'){
	echo json_encode(array('code'=>1007,'message'=>'sn is null'));
	die();
}

if($count<=0) $count=1;

if(!($user=='1' || $user=='0' || $user=='2')){
	echo json_encode(array('code'=>1005,'message'=>'user is invalid'));
	die();
}

$db=connect_database('health');
if(!$db){
	echo json_encode(array('code'=>1100,'message'=>'Not support'));
	die();
}


if($devicetype == '1'){
	//$sql=mysql_query("select * from gsm_bp");
	if($user == '2'){
		$sql=mysql_query("select * from gsm_bp where sn='$sn' and datetime>'$time' order by id desc limit 0 ,$count");
	}else{
		$sql=mysql_query("select * from gsm_bp where sn='$sn' and user=$user and datetime>'$time' order by id desc limit 0 ,$count");
	}
}else if($devicetype == '2'){
	$sql=mysql_query("select * from gsm_bg where sn='$sn' and datetime>'$time' order by id desc limit 0 ,$count");
}
while($row=mysql_fetch_assoc($sql))
$output[]=$row;

mysql_close();
if(is_null($output)){
echo json_encode(array('code'=>1008,'message'=>'No data'));
die();
}

$result=array('code'=>1000,'message'=>$output);
//print(json_encode($output,true));
print(json_encode($result));


?>
