<?php
//接收用户数据
$username=$_POST["username"];
$password=$_POST["password"];
$phone=$_POST["phone"];
$email=$_POST["email"];

//连接数据库
$link=mysqli_connect("localhost","root","root","p2p",3306);

//构造sql语句
$sql="insert into userinfo(username,pwd,mobile,email) values('".$username."','".$password."','".$phone."','".$email."')";
//echo $sql;

//执行sql语句
$result=mysqli_query($link,$sql);
//根据是否执行成功返回json结果到前端
if($result){
    $rsArray=["isSuccess"=>true,"msg"=>"用户注册成功"];
    echo json_encode($rsArray);
}
else{
    $rsArray=["isSuccess"=>false,"msg"=>"用户注册失败"];
    echo json_encode($rsArray);
}
//释放内存资源
// mysqli_free_result($result);
// mysql_close($link);
?>