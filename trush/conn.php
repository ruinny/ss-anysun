<?php
/**
 * Created by PhpStorm.
 * User: Rui
 * Date: 2017/9/14
 * Time: 11:01
 */

$db_server_name="198.13.45.35";
$db_server_user="anysun";
$db_server_pwd="t1dYvTchl6CRrbY0";
$db_name="anysun";


$conn= new mysqli($db_server_name,$db_server_user,$db_server_pwd,$db_name);

if($conn->connect_error){
    die("失败".$conn->connect_error);
}

?>