<?php
$base_path = "./upload/"; //接收文件目录
$target_path = $base_path . basename ( $_FILES ['file'] ['name'] );
if (move_uploaded_file ( $_FILES ['file'] ['tmp_name'], $target_path )) {
    $array = array ("code" => "1", "message" => $_FILES ['file'] ['name'] );
    echo json_encode ( $array );
} else {
    $array = array ("code" => "0", "message" => "There was an error uploading the file, please try again!" . $_FILES ['file'] ['error'] );
    echo json_encode ( $array );
}
?>










