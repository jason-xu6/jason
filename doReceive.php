<?php
  header("content-type:text/html;charset:utf-8");
$num=$_POST['num'];
$username=$_POST['username'];
$price=$_POST['price'];
$surplus=$_POST['surplus'];
$act=$_GET['act'];
$filename='mesage.txt';
if($act=='addMessage'){
     
     if (file_exists($filename)&&filesize($filename)>0) {
     	$string=file_get_contents($filename);
     	$mesInfo=unserialize($string);
     }

		$mesInfo[]=compact('num','username','price','surplus');
		$mesInfo=serialize($mesInfo);
		if (file_put_contents($filename, $mesInfo)) {
			echo "添加成功<br><a href='index2-in.php'>继续添加</a><a href='index2.php'>查看添加</a>";
			echo "三秒钟之后自动跳转出库界面";
		    echo "<meta http-equiv='refresh' content='3;url=index2-de.php'/><br>";
		}else{
			echo "添加失败<br><a href='index2-in.php'>重新添加</a>";
		}
	
};