<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>接口测试</title>
</head>
<body>
<form action="test1.php"  method="post" >
		请输入要发送的全部内容:<input style="width:1280px;" type="text" name="msg" id="input1" />
		<br>
		<br>
		<br>
		<input type="button" onclick="javascript:alert((document.getElementById('input1').value.length-4).toString(16));" value="计算长度" />
		计算的长度是减去前面四位后的长度的16进制显示, 比如0015CS*358688000000158*LK ,计算结果为15
		<br>
		<br>
		<br>
		<input type="submit" value="发送"  ;/>
	</form>
<br>
<br>
<br>
<h1> log </h1>
<?php
//echo file_get_contents("/home/work/wzb/project/release/log/workerman.log");
$handle = fopen('/home/work/wzb/project/release/log/workerman.log', 'r');
    while(!feof($handle)){
        echo fgets($handle);?>
        <br>
<?php }
    fclose($handle);
?>
</body>
</html>





