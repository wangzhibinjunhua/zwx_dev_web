<?php
header("Content-type: text/html; charset=utf-8");
require_once('/home/work/wzb/project/release/common/db_config.php');

$title="";
$ticker="";
$content="";
$url="";
$intervals=120;

if($_SERVER['REQUEST_METHOD'] == "POST"){

	if($_POST['key'] != 'huayingtek'){
		echo json_encode(array('code'=>1100,'message'=>'key err'));
		die();
	}
	$title = isset($_POST['title']) ? $_POST['title'] : '';
	$ticker = isset($_POST['ticker']) ? $_POST['ticker'] : '';
	$content = isset($_POST['content']) ? $_POST['content'] : '';
	$url = isset($_POST['url']) ? $_POST['url'] : '';
	$intervals = isset($_POST['intervals']) ? $_POST['intervals'] : 120;

}else if($_SERVER['REQUEST_METHOD']== "GET"){
	if($_GET['key'] != 'huayingtek'){
		echo json_encode(array('code'=>1100,'message'=>'key err'));
		die();
	}
	$title = isset($_GET['title']) ? $_GET['title'] : '';
	$ticker = isset($_GET['ticker']) ? $_GET['ticker'] : '';
	$content = isset($_GET['content']) ? $_GET['content'] : '';
	$url = isset($_GET['url']) ? $_GET['url'] : '';
	$intervals = isset($_GET['intervals']) ? $_GET['intervals'] : 120;

}else{

		echo json_encode(array('code'=>1100,'message'=>'Not support'));
		die();
}

if(empty($title) || empty($ticker) || empty($content)){
	echo json_encode(array('code'=>1100,'message'=>'content is null'));
	die();
}
$showtime=date("Y-m-d H:i:s");

$db=connect_database('android_push');
if(!$db){
	echo json_encode(array('code'=>1100,'message'=>'Not support'));
	die();
}

mysql_query("SET NAMES UTF8");
$sql=mysql_query("insert into push_novatech (ticker,title,content,url,intervals,datetime) values ('$ticker','$title','$content','$url','$intervals','$showtime')");


$result=array('code'=>1000,'message'=>'push success');
print(json_encode($result));
// echo json_encode(array('id'=>1,'interval'=>10,'ticker'=>'Not support','title'=>$_GET['id'],'content'=>'shidwdddmwidd中文大黄蜂五福娃分我的文档'));
