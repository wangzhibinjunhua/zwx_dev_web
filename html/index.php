<?php
$info=$_SERVER['HTTP_HOST'];
switch($info){
	case "huayinghealth.com":
	case "www.huayinghealth.com":
		#header("location:http://huayingtek.com");
		break;
	case "api.huajunsz.com":
	case "www.api.huajunsz.com":
		header("location:http://huajunsz.com/v1");
		break;
	default:
		//header("location:index.php");
	break;
}
?>

<html><body><h1>Welcome!</h1>


<head>
	<title>huajunsz</title>
	<p>.</p>
	<p>2016</p>

	<style type="text/css">
		html,body {
			height: 100%;
			margin: 0;
			padding: 0;
		}

		#container {
			min-height: 100%;
			height: auto !important;
			height: 100%;
		}
		#page {
			padding-bottom: 60px;
		}
		#footer {
			position: relative;
			margin-top: -60px;
			height: 60px;
			clear:both;
		}

		#header {
			padding: 10px;
			background: lime;
		}
		#left {
			width: 18%;
			float: left;
			margin-right: 2%;
			background: blue;
		}
		#content{
			width: 60%;
			float: left;
			margin-right: 2%;
			background: green;
		}
		#right {
			width: 18%;
			float: left;
			background: blue;
		}
	</style>

	<style>
    div{width:100%;
        height:50px;
        line-height: 50px;
        border:0px solid red;
        background: Silver;
        margin: 0 auto;
        font-size: 30px;
        color: red;
        font-weight: blod;
        text-align: center;
       }
</style>
</head>


<body>
	<form action="http://120.24.36.177/fota/get_bp_demo.php" method="post">
IMEI: <input type="text" name="c_userid"><br>
TIME: <input type="text" name="c_datetime"><br>
<input name="submit" type="submit" value="查看血压数据">
</form>

	<form action="http://120.24.36.177/fota/getLocation.php" method="post">
IMEI: <input type="text" name="c_userid"><br>
TIME: <input type="text" name="c_datetime"><br>
<input name="submit" type="submit" value="查看GPS数据">
</form>

<br>
<br>
<a href="apk/watch.apk">下载 APK</a>

<img src="apk/watch.png" />


<div id="divid">
	<div class="containeraa">
    </div>
	</div>

<script type="text/javascript">
var divobj=document.getElementById('divid');
//定时器的用法
setInterval("settime()",1000);   //每秒
function settime(){
var node = new Date();
var y=node.getFullYear();
var m=(node.getMonth()+1);
var d=node.getDate();
var h=node.getHours();
var i=node.getMinutes();
var s=node.getSeconds();
var time=(y+"-"+m+"-"+d+" "+h+":"+i+":"+s);
var divVal=divobj.innerHTML=time;
}
</script>

</body>

<body>
	<div id="container">

		<div id="page" class="clearfix">

		</div>
	</div>
	<div id="footer">
		<p align="center">
<a href="http://www.miitbeian.gov.cn/" target="_blank">粤ICP备16055894号-1</a>
</p>

		 </div>
</body>


</body></html>

