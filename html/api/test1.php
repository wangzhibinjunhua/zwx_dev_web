

<?php
header("Content-type: text/html; charset=utf-8");
$msg=$_POST['msg'];
$port=$_POST['msg2'];
if(empty($port)){
	echo "请填写正确的端口号".PHP_EOL;
	exit();
}
if($port == '8282'){
	$port='9292';
}else if($port == '10003'){
	$port='10002';
}
// 建立连接，@see http://php.net/manual/zh/function.stream-socket-client.php
$client = stream_socket_client('tcp://192.168.16.101:'.$port);
if(!$client)exit("can not connect");
// 模拟超级用户，以文本协议发送数据，注意Text文本协议末尾有换行符（发送的数据中最好有能识别超级用户的字段），这样在Event.php中的onMessage方法中便能收到这个数据，然后做相应的处理即可
$send_data='{"id":"0000dwdad231adwd","cmd":"test","info":'.'"'.$msg.'"'.'}';
echo $send_data;
$rs_len=sprintf("%04x",strlen($send_data));
fwrite($client, $rs_len.$send_data);
fclose($client);
