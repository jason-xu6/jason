<?php
header("content-type:text/html;charset:utf-8");

$num=$_POST['num'];
$name=$_POST['name'];
$price=$_POST['price'];
$surplus=$_POST['surplus'];
$file='sell.txt';
echo "商品编号：".$num.'<br>';
echo "商品名称：".$name.'<br>';
echo "商品价格：".$price.'<br>';
echo "出售数量：".$surplus.'<br>';
echo "出售成功<br>";
echo "<a href='index3-re.php'>继续出售</a>";
echo "三秒钟之后自动跳转登陆界面";
echo "<meta http-equiv='refresh' content='5;url=index3-re.php'/>";
		
