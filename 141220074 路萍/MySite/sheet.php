<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>订单</title>
<?php
header("Content-Type: text/html; charset=gb2312");
$name=$_POST['name'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$numbers=$_POST['numbers'];

//连接数据库shop
$connect = mysqli_connect('localhost', 'root', '', 'shop') or die('Unale to connect');


$sql="insert into orderform(clientName,address,phone,numbers)values($name,$address,$phone,$numbers)";
$result = mysqli_query($connect, $sql);

?>

<style type="text/css">
<!--
.STYLE2 {font-size: xx-small}
.STYLE3 {
	font-size: 36px;
	color: #FF0000;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<center>
<table width="596" height="245" border="1" cellpadding="2">
  <tr>
    <td height="41"><div align="center" class="STYLE2"><span class="STYLE3">订单详细信息</span>：</div></td>
    </tr>
  <tr>
    <td>&nbsp;
	<?php
	
	 echo "收货人：".$name;
	
	?>
	
	</td>
    </tr>
  <tr>
    <td>&nbsp;
	
	<?php
	
	 echo "收货地址：".$address;
	
	?>
	</td>
    </tr>
  <tr>
    <td>&nbsp;
	<?php
	
	 echo "联系电话：".$phone;
	
	?>
	</td>
    </tr>
  <tr>
    <td>&nbsp;
	<?php
	
	 echo "购买数量：".$numbers;
	
	?>
	</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    </tr>
</table>
</center>
</body>
</html>
