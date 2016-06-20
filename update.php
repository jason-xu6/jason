<?php
   header("content-type:text/html;charset:utf-8");
  $up=$_GET["value"];
  $id=$_GET["id"];
  $file='mesage.txt';

if (file_exists($file)&&filesize($file)>0) {
     	$string=file_get_contents($file);
     	$mesInfo=unserialize($string);
     }
        $mesInfo[$id]['surplus']=$up;

		$mesInfo=serialize($mesInfo);
		if (file_put_contents($file, $mesInfo)) {
			echo "出库成功<br><a href='index2-de.php'>继续出库</a><br>";
			echo "三秒钟之后自动跳转出库界面";
		    echo "<meta http-equiv='refresh' content='3;url=index2-de.php'/><br>";
			echo "库存还剩:".$up;
			
		}else{
			echo "出库失败<br><a href='index2-de.php'>重新出库</a>";
		}

		
