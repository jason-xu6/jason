<?php
  header("content-type:text/html;charset:utf-8");
$filename='mesage.txt';
     
     
     	$string=file_get_contents($filename);
     	$mesInfo=unserialize($string);
     

		$mesInfo[]=compact('num','username','price','surplus');
		$mesInfo=serialize($mesInfo);
		if (file_put_contents($filename, $mesInfo)) {
			echo "添加成功<br><a href='index2-in.php'>继续添加</a><a href='index2.php'>查看添加</a>";
		}else{
			echo "添加失败<br><a href='index2-in.php'>重新添加</a>";
		}
	