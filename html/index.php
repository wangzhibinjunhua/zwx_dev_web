<?php
$info=$_SERVER['HTTP_HOST'];
switch($info){
	case "huayinghealth.com":
	case "www.huayinghealth.com":
		header("location:http://huayinghealth.com/health");
		break;
	case "www.huayinghealth.cn":
	case "huayinghealth.cn":
		header("location:http://huayinghealth.cn/health");
		break;
	default:
		//header("location:index.php");
	break;
}
?>




<html>

    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></>

    <style type="text/css">

        BODY { color: #000000; background-color: white; font-family: Verdana; margin-left: 0px; margin-top: 0px; }
        #content { margin-left: 30px; font-size: .70em; padding-bottom: 2em; }
        A:link { color: #336699; font-weight: bold; text-decoration: underline; }
        A:visited { color: #6699cc; font-weight: bold; text-decoration: underline; }
        A:active { color: #336699; font-weight: bold; text-decoration: underline; }
        A:hover { color: cc3300; font-weight: bold; text-decoration: underline; }
        P { color: #000000; margin-top: 0px; margin-bottom: 12px; font-family: Verdana; }
        pre { background-color: #e5e5cc; padding: 5px; font-family: Courier New; font-size: x-small; margin-top: -5px; border: 1px #f0f0e0 solid; }
        td { color: #000000; font-family: Verdana; font-size: .7em; }
        h2 { font-size: 1.5em; font-weight: bold; margin-top: 25px; margin-bottom: 10px; border-top: 1px solid #003366; margin-left: -15px; color: #003366; }
        h3 { font-size: 1.1em; color: #000000; margin-left: -15px; margin-top: 10px; margin-bottom: 10px; }
        ul { margin-top: 10px; margin-left: 20px; }
        ol { margin-top: 10px; margin-left: 20px; }
        li { margin-top: 10px; color: #000000; }
        font.value { color: darkblue; font: bold; }
        font.key { color: darkgreen; font: bold; }
        font.error { color: darkred; font: bold; }
        .heading1 { color: #ffffff; font-family: Tahoma; font-size: 26px; font-weight: normal; background-color: #003366; margin-top: 0px; margin-bottom: 0px; margin-left: -30px; padding-top: 10px; padding-bottom: 3px; padding-left: 15px; width: 105%; }
        .button { background-color: #dcdcdc; font-family: Verdana; font-size: 1em; border-top: #cccccc 1px solid; border-bottom: #666666 1px solid; border-left: #cccccc 1px solid; border-right: #666666 1px solid; }
        .frmheader { color: #000000; background: #dcdcdc; font-family: Verdana; font-size: .7em; font-weight: normal; border-bottom: 1px solid #dcdcdc; padding-top: 2px; padding-bottom: 2px; }
        .frmtext { font-family: Verdana; font-size: .7em; margin-top: 8px; margin-bottom: 0px; margin-left: 32px; }
        .frmInput { font-family: Verdana; font-size: 1em; }
        .intro { margin-left: -15px; }


		#footer{
   			position:absolute;  bottom: 30;
   			left:0;
   			height: 0px;
		}

    </style>

    <title>
    	Huaying Health
	</title></head>

  <body>

    <div id="content">

    	<p class="heading1">Huaying Health</p><br>
    		<span style="font-size:30px;color:red">

    			<ul>
	            	<li>
	                	<a href="">健康云</a>

	            	</li>
	            	<li>
	                	<a href="">大数据</a>
	            	</li>
	            </ul>

	        	<ul>
	            	<li>
	                	<a href="">血压计</a>
	            	</li>
	            	<li>
	                	<a href="">血糖仪</a>
	            	</li>
	            </ul>

	            <ul>
	            	<li>
	                	<a href="">血氧血脂</a>
	            	</li>
	            	<li>
	                	<a href="">心电检测</a>
	            	</li>
	            </ul>
	        </span>
        <p>



  </body>




    <div id="footer">
    	<a href="http://www.miitbeian.gov.cn/" target="_blank">粤ICP备16055894号
    	</a>
    	 <li>
    	深圳市华英智联通信技术有限公司
    	</li>

    </div>




</html>
