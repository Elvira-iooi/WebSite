<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>

</head>

<body>
    <p align="right" style="font-size: 18px; color: #0033CC;">
  <?php
         header("Content-Type: text/html; charset=gb2312");
         session_start();
        if( isset($_SESSION["username"])){
             echo "��ӭ��:".$_SESSION['username'];
             echo "      ";
             echo "<a href='logout.php' target=_blank>ע��</a>";
         }else{
             
             echo "<a href='login.php' target=_blank>��¼|ע��</a>"; 
         }
        
 ?>   
</p>

</body>

</html>
