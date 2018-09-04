<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>验证用户页</title>
<?php
header("Content-Type: text/html; charset=gb2312");
session_start();

//从全局变量$_POST数组中取用户名和密码字符串;
$name="";
$password="";

if(is_string($_POST['username'])){
     $name=$_POST['username'];
}
if(is_string($_POST['password'])){
     $password=$_POST['password'];
}

//连接数据库，查找用户表（users）,如果找到传递过来的用户名和密码，则显示登录成功，并记录下用户名。

$conn=new mysqli("localhost","root","","shop");
if(mysqli_connect_error()){
  echo "connect to database error!".mysqli_connect_error();
  $conn=null;
  exit;
}

//select 出users 中表中存有的用户和密码结果集;
$sql="select * from users where(userName='$name')and(userPassword='$password')";
$rs=$conn->query($sql);
//获取结果集中的记录数（如找到，由为1，否则为0）;
$num=mysqli_num_rows($rs);

?>

</head>

<body>
    <p align="center">
        
    
<?php
//用结果集行数num判断，如果非0，说明用户名与密码存在表users中，让其登录（即写入session中）;

if($num){
        $_SESSION['username']=$name;  //把用户名写入session
    
        echo "用户：".$name." ";
        echo "<br>";
        echo "已经成功登录，请刷新主页查看！";}
  else{
        echo "用户或者密码错误，请返回重新输入！";
  }
        
        
?>
     </p>
</body>
</html>
