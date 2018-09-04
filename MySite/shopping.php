<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
        <title>填写订单</title>
        <?php
        header("Content-Type: text/html; charset=gb2312");
        $productId = $_GET['i'];
        $productName = $_GET['n'];
        $productPrice = $_GET['p'];
        $productStock = $_GET['s'];
        ?>


        <style type="text/css">
            <!--
            .STYLE1 {font-size: 16px}
            .STYLE8 {font-size: 16px; color: #0033FF; }
            .STYLE9 {color: #0033FF}
            -->
        </style>
		<script language=JavaScript>
<!--

function InputCheck(form1)
{
  if (form1.name.value == "")
  {
    alert("请输入收货人姓名!");
    form1.name.focus();
    return (false);
  }
  if (form1.address.value == "")
  {
    alert("请输入收货地址!");
    form1.address.focus();
    return (false);
  }
   if (form1.phone.value == "")
  {
    alert("请输入联系电话!");
    form1.phone.focus();
    return (false);
  }
   if (form1.numbers.value == "")
  {
    alert("请输入购买数量!");
    form1.numbers.focus();
    return (false);
  }
  
}

//-->
</script>
		
    </head>

    <body>
        <center>
            <table width="1280" border="0" cellpadding="2">
                <tr>
                    <td colspan="6"><img src="images/top1.jpg" width="1280" height="145" /></td>
                </tr>
                <tr>
                    <td width="145"><span class="STYLE1"></span></td>
                    <td width="132"><span class="STYLE1"></span></td>
                    <td width="248"><span class="STYLE1"></span></td>
                    <td width="199">&nbsp;</td>
                    <td width="364">&nbsp;</td>
                    <td width="162">&nbsp;</td>
                </tr>
                <tr>
                    <td bgcolor="#FFCC66"><span class="STYLE8">商品编号：</span></td>
                    <td bgcolor="#FFCC66"><span class="STYLE8">
                            <?php
                            echo $productId;
                            ?>
                        </span></td>
                    <td bgcolor="#FFCC66"><span class="STYLE8">商品名称：</span></td>
                    <td bgcolor="#FFCC66"><span class="STYLE8">
                            <?php
                            echo $productName;
                            ?>
                        </span></td>
                    <td colspan="2" rowspan="4" bgcolor="#FFCC66">

                        <?php
                        $imgF = "rose/$productId" . ".jpg";
                        if (!file_exists($imgF)) {
                            
                        } else {
                            echo "<img src=" . $imgF . " width=400' height='300'/>";
                        }
                        ?>	</td>
                </tr>
                <tr>
                    <td bgcolor="#FFCC66"><span class="STYLE8">商品价格：</span></td>
                    <td bgcolor="#FFCC66"><span class="STYLE9">
                            <?php
                            echo $productPrice;
                            ?>

                        </span></td>
                    <td bgcolor="#FFCC66"><span class="STYLE8">库存：</span></td>
                    <td bgcolor="#FFCC66">
                        <?php
                        echo $productStock;
                        ?>	</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><span class="STYLE1"></span></td>
                    <td><span class="STYLE1"></span></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="4"><span class="STYLE1"></span><span class="STYLE1"></span><span class="STYLE1"></span>     
                        <form action="sheet.php" method="post" name="form1" class="STYLE1" id="form1" onSubmit="return InputCheck(this)">
                            <label><br />
                                收货姓名：
                                <input type="text" name="name" width="300" height="24" />
                            </label>
                            <p>
                                <label>收货地址：
                                    <input name="address" type="text" width="400" height="24" />
                                </label>
                            </p>
                            <p>
                                <label>联系电话：
                                    <input type="text" name="phone" width="300" height="24"/>
                                </label>
                            </p>
                            <p>
                                <label>购买数量：
                                    <input type="text" name="numbers" width="300" height="24" />
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input type="submit" name="Submit" value="填好生成订单" />
                                </label>
                            </p>
                        </form></td>
                </tr>

                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td colspan="4">&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="6">&nbsp;</td>
                </tr>
            </table>

            <div align="center">
                <hr />
                <p>&nbsp;</p>
                <p><a href="about.htm" target="_blank">关于我们</a>|<a href="mailto:luping@sohu.com">联系我们</a>|友情链接</p>
                <p>南京市栖霞区仙林大道南京大学</p>
            </div>
        </center>
    </body>
</html>
