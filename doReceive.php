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
			echo "添加成功<br><a href='postform.html'>继续添加</a><a href='listmessage.php'>查看添加</a>";
		}else{
			echo "添加失败<br><a href='postform'>重新添加</a>";
		}
	
};