<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>

</head>

<body>
    <p align="right" style="font-size: 18px; color: #0033CC;">
  <?php
         header("Content-Type: text/html; charset=gb2312");
         session_start();
        if( isset($_SESSION["username"])){
             echo "欢迎你:".$_SESSION['username'];
             echo "      ";
             echo "<a href='logout.php' target=_blank>注销</a>";
         }else{
             
             echo "<a href='login.php' target=_blank>登录|注册</a>"; 
         }
        
 ?>   
</p>

</body>

</html>
