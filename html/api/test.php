<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>接口测试</title>
</head>
<body>
<form action="test1.php"  method="post" >
        请输入要手表连接的端口号:<input style="width:200px;" type="text" name="msg2" id="input2" />

        <br>
        <br>
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

<ul>
<li><a href="http://dev.huayinghealth.com/server_debug.html" target="_blank">查看服务器10003端口接收到的消息</a></li></ul>

<br>
<br>
<br>
<ul>
<li><a href="http://dev.huayinghealth.com/server_debug2.html" target="_blank">查看服务器8282端口接收到的消息</a></li></ul>
<?php
/**
 * 取文件最后$n行
 * @param string $filename 文件路径
 * @param int $n 最后几行
 * @return mixed false表示有错误，成功则返回字符串
 */
 function FileLastLines($filename,$n){
    if(!$fp=fopen($filename,'r')){
        echo "打开文件失败，请检查文件路径是否正确，路径和文件名不要包含中文";
        return false;
    }
    $pos=-2;
    $eof="";
    $str="";
    while($n>0){
        while($eof!="\n"){
            if(!fseek($fp,$pos,SEEK_END)){
                $eof=fgetc($fp);
                $pos--;
            }else{
                break;
            }
        }
        $str.=fgets($fp);
        $eof="";
        $n--;
    }
    return $str;
 }
//echo nl2br(FileLastLines('/home/work/wzb/project/release/log/workerman.log',40));

?>
<?php
//echo file_get_contents("/home/work/wzb/project/release/log/workerman.log",FALSE,NULL,1024,1024);
//$handle = fopen('/home/work/wzb/project/release/log/workerman.log', 'r');
  //  while(!feof($handle)){
    //    echo fgets($handle);?>
       <!-- <br> -->
<?php //}
  //  fclose($handle);
?>
</body>
</html>





