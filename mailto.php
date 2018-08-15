<?php
/**
 * Created by PhpStorm.
 * User: Rui
 * Date: 2017/9/13
 * Time: 20:01
 */
require 'conn.php';
$email=$_POST["email"];



//$sql="SELECT * FROM anysun";
$sql = "INSERT INTO email (email)
VALUES ('".$email."')";
//echo $sql;
if($conn->query($sql)==true){
    echo "已经加入邮箱了，今后如果节点信息有变动会发邮件哦！";
}else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>