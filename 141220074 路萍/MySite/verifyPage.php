<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>��֤�û�ҳ</title>
<?php
header("Content-Type: text/html; charset=gb2312");
session_start();

//��ȫ�ֱ���$_POST������ȡ�û����������ַ���;
$name="";
$password="";

if(is_string($_POST['username'])){
     $name=$_POST['username'];
}
if(is_string($_POST['password'])){
     $password=$_POST['password'];
}

//�������ݿ⣬�����û���users��,����ҵ����ݹ������û��������룬����ʾ��¼�ɹ�������¼���û�����

$conn=new mysqli("localhost","root","","shop");
if(mysqli_connect_error()){
  echo "connect to database error!".mysqli_connect_error();
  $conn=null;
  exit;
}

//select ��users �б��д��е��û�����������;
$sql="select * from users where(userName='$name')and(userPassword='$password')";
$rs=$conn->query($sql);
//��ȡ������еļ�¼�������ҵ�����Ϊ1������Ϊ0��;
$num=mysqli_num_rows($rs);

?>

</head>

<body>
    <p align="center">
        
    
<?php
//�ý��������num�жϣ������0��˵���û�����������ڱ�users�У������¼����д��session�У�;

if($num){
        $_SESSION['username']=$name;  //���û���д��session
    
        echo "�û���".$name." ";
        echo "<br>";
        echo "�Ѿ��ɹ���¼����ˢ����ҳ�鿴��";}
  else{
        echo "�û�������������뷵���������룡";
  }
        
        
?>
     </p>
</body>
</html>
