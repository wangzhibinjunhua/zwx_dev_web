<?php
header('Content-Length: 31');
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

$return_msg_sum1=0x78^0x4c^0x2f^0x78^0x50^0x00;
$sum1=sprintf("%02x",$return_msg_sum1);
$showtime=date("Y-m-d H:i:s");


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

//file_put_contents("log.txt",$showtime." datatype=".$datatype." data=".$data.PHP_EOL,FILE_APPEND);
$ret=parse_data($showtime,$datatype,$data);
#echo json_encode(array('code'=>1001,'message'=>'upload ok: data='.$data));

$return_msg_new_1=strtoupper($return_msg_new);
//echo strtoupper($return_msg_new);
echo $return_msg_new_1;
//die();

function parse_data($showtime,$datatype,$data){
//file_put_contents("log.txt",$showtime." datatype=".$datatype." data=".$data.PHP_EOL,FILE_APPEND);
	file_put_contents("log.txt",$showtime.$data.PHP_EOL,FILE_APPEND);
	if(strlen($data)==85){
		$device_type=hexdec(substr($data,9,2));
		$sn         =hexdec(substr($data,11,9));
		$imsi       =hexdec(substr($data,44,15));

		mysql_connect("localhost:3306","root","huayingtekmysql");
 		mysql_query("SET NAMES utf8");
 		mysql_select_db("health");

		if($device_type == '01'){//ÑªÑ¹¼Æ
    		$user       =hexdec(substr($data,4,1));
    		$sys        =(substr($data,20,3));//¸ßÑ¹
    		$dia        =(substr($data,23,3));//µÍÑªÑ¹
    		$pul        =(substr($data,26,3));//ÐÄÂÊ


    		$bp=$sys.'*'.$dia;
    		$sql=mysql_query(" insert into gsm_bp (sn,imsi,user,bp,bpm,datetime) values ($sn,$imsi,$user,'$bp',$pul,'$showtime')");
    		mysql_close();

		}else if($device_type == '02'){//ÑªÌÇÒÇ
			$bg_value=(substr($data,26,3));
			$sql=mysql_query(" insert into gsm_bg (sn,imsi,bg,datetime) values ($sn,$imsi,$bg_value,'$showtime')");
			mysql_close();
		}

		return true;
	}

}



?>
