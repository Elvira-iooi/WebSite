<html>
    <head>
        <meta charset="GB2312">
        <title></title>
    </head>
    <body>
        <?php
       header("Content-Type: text/html; charset=gb2312");
        session_start();
        unset($_SESSION['username']);
        echo "<p align='center'>";
            
        echo "用户已经注销，请刷新查看!";
        
        // put your code here
        ?>
    </body>
</html>
