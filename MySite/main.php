<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf8" />
        <title>main</title>
        <?php
        
        $rose_style = 1; //»¨Ä¾·ÖÀà

        $rose_style = $_GET['rose_type'];



        $connect = mysqli_connect('localhost', 'root', '', 'shop') or die('Unale to connect');

        $sql = "";
        if ($rose_style == 1) {
            $sql = "select * from rose where (rose.id>1000 and rose.id<2000)";
        } else if ($rose_style == 2) {
            $sql = "select * from rose where (rose.id>2000 and rose.id<3000)";
        } else if ($rose_style == 3) {
            $sql = "select * from rose where (rose.id>3000 and rose.id<4000)";
        } else if ($rose_style == 4) {
            $sql = "select * from rose where (rose.id>4000 and rose.id<5000)";
        } else {
            $sql = "select * from rose";
        }
        $result = mysqli_query($connect, $sql);
        ?>
    </head>
    <body>

 <?php
    while ($row = mysqli_fetch_row($result)) {

$id=$row[0];
$name=$row[1];
$price=$row[3];
$stock=$row[4];
$detail=$row[5];
$style=$row[6];
$imgFile="rose/$id".".jpg";
 echo "<table width='990' border='1' cellspacing='2' cellpadding='2' bordercolor='#0000CC'>";
    echo "<tr>";
   
if(!file_exists($imgFile)){continue;}else{
echo "<tr><td> <a href='shopping.php?i=$id&n=$name&p=$price&s=$stock' target='_blank'><img src=" . $imgFile." width='400' height='300'/></a> </td>";
}     

 echo "<td width='320'>";

    echo "<table width='95%' border='0' cellspacing='5' cellpadding='2'>";

     echo "<tr>";
       echo "<td width='40%'><div align='left'> Product No.</div>";
       echo "</td>";
       echo "<td width='60%'>".$id;
       echo "</td>";
     echo "</tr>";

  echo "<tr>";
       echo "<td width='40%'><div align='left'> Product Name</div>";
       echo "</td>";
       echo "<td width='60%'>".$name;
       echo "</td>";
     echo "</tr>";


  echo "<tr>";
       echo "<td width='40%'><div align='left'> Price</div>";
       echo "</td>";
       echo "<td width='60%'>".$price;
       echo "</td>";
     echo "</tr>";

  echo "<tr>";
       echo "<td width='40%'><div align='left'> Product stock</div>";
       echo "</td>";
       echo "<td width='60%'>".$stock;
       echo "</td>";
     echo "</tr>";
echo "<tr>";
echo "<td colspan='2' align='center'>";
echo "<a href='shopping.php?i=$id&n=$name&p=$price&s=$stock' target='_blank'><img src='images/buyNow.JPG' alt='' width='180' height='53' border='0'/></a>";
echo "</td>";
echo "</tr>";
    echo "</table>";       
 

 echo "</td>";
        /*echo "<td width='30'>"."No.".$id."</td>";
        
        echo "<td width='30'>"."Name:".$name."</td>";
        echo "<td width='20'>"."Price:".$price."</td>";
        echo "<td width='20'>"."Stock:".$stock."</td>";
    */
        echo "<td width='300'>".$detail."</td>";
    echo "</tr>";
 echo "</table>";


//        echo $row[6];
    }
  ?>

    </body>
</html>
