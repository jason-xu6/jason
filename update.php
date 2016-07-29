<?php
   header("content-type:text/html;charset:gb2312");
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
			echo "successful<br><a href='index2-de.php'><br>go on</a><br>";
			echo "Three seconds after the automatic jump landing interface";
		    echo "<meta http-equiv='refresh' content='3;url=index2-de.php'/><br>";
			echo "left:".$up;
			
		}else{
			echo "failure<br><a href='index2-de.php'>Again</a>";
		}

		
