<?php
/**
 * Created by PhpStorm.
 * User: zhengwei
 * Date: 2017/4/12
 * Time: 下午10:12
 */

require_once "../function/function.php";
require_once "../function/mysqlDb.php";
$userInfo = getInfo();
$mysql = new  mysqlDb();

if(isset($_GET['type'])) {
    $type = $_GET['type'];
    switch ($type) {
        case "time":
            $userId=$userInfo["userid"];
            $data = $_POST["data"];
            $title = $data[0];
            $srctype = 1;
            $other = json_encode($data);
            if($mysql->addNew($userId,$title,"",$srctype,$other)) {
                echo json_encode(array(
                    'errcode'=>1,
                    'info'=>"ok",
                    'id'=>$mysql->getNewId($userId)
                ));
            }
            else {
                echo json_encode(array(
                    'errcode'=>-1,
                    'info'=>"error code"
                ));
            }
            break;
        case "where":
            $userId=$userInfo["userid"];
            $data = $_POST["data"];
            $title = $data[0];
            $srctype = 2;
            $other = json_encode($data);
            if($mysql->addNew($userId,$title,"",$srctype,$other)) {
                echo json_encode(array(
                    'errcode'=>1,
                    'info'=>"ok",
                    'id'=>$mysql->getNewId($userId)
                ));
            }
            else {
                echo json_encode(array(
                    'errcode'=>-1,
                    'info'=>"error code",
                ));
            }
            break;
        case "movie":
            $userId=$userInfo["userid"];
            $data = $_POST["data"];
            $title = $data[0];
            $srctype = 3;
            $other = json_encode($data);
            if($mysql->addNew($userId,$title,"",$srctype,$other)) {
                echo json_encode(array(
                    'errcode'=>1,
                    'info'=>"ok",
                    'id'=>$mysql->getNewId($userId)
                ));
            }
            else {
                echo json_encode(array(
                    'errcode'=>-1,
                    'info'=>"error code"
                ));
            }
            break;
        case "3":


            break;
        case "31":


            break;
        case "4":


            break;
        default:
            echo json_encode(array(
                'errcode'=>-2,
                'info'=>"don't have this type!"
            ));
            break;
    }



}
else {
    echo json_encode(array(
        'errcode'=>-1,
        'info'=>'lose params'
    ));
}





