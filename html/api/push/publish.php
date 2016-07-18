<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>推送发布</title>
</head>
<body>
<h1>novatech 推送服务发布平台 </h1>
<br>
<br>
<form action="push.php"  method="post" >
		请输入ticker:<input style="width:640px;" type="text" name="ticker"  />
		<br>
		<br>
		<br>
		请输入title:<input style="width:640px;" type="text" name="title"  />
		<br>
		<br>
		<br>
		请输入content:<input style="width:640px;" type="text" name="content"  />
		<br>
		<br>
		<br>
		请输入url:<input style="width:640px;" type="text" name="url"  /> 格式为http://abcd.com
		<br>
		<br>
		<br>
		请输入interval:<input style="width:640px;" type="text" name="intervals"  />
		<br>
		<br>
		<br>
		请输入password:<input style="width:640px;" type="text" name="key"  />
		<br>
		<br>
		<br>
		<input type="submit" value="发布推送"  ;/>
	</form>
<br>
</body>
<body>
<br>
<br>
<h1>已发布的推送消息</h1>
<br>
<?php
require_once('/home/work/wzb/project/release/common/db_config.php');
$db=connect_database('android_push');
if(!$db){
	echo json_encode(array('code'=>1100,'message'=>'Not data'));
	die();
}
mysql_query("SET NAMES UTF8");
$sql=mysql_query("select * from push_novatech");
echo "<table border=1>";
echo "<tr><td>ID</td><td>通知</td><td>标题</td><td>内容</td><td>链接</td><td>间隔</td><td>时间</td></tr>";
while($row=mysql_fetch_array($sql)){
	echo "<tr>";
	echo "<td>".$row[id]."</td>";
	echo "<td>".$row[ticker]."</td>";
	echo "<td>".$row[title]."</td>";
	echo "<td>".$row[content]."</td>";
	echo "<td>".$row[url]."</td>";
	echo "<td>".$row[intervals]."</td>";
	echo "<td>".$row[datetime]."</td>";
	echo "<td>"."<input type='submit' value='delete'/>"."</td>";
	echo "</tr>";
}
?>
</body>
</html>





