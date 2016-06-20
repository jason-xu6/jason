<?php
  header("content-type:text/html;charset:utf-8");
$number2=$_POST['number2'];
$choice=$_POST['choice'];
$password2=$_POST['password2'];
$filename='register.txt';
     
     if (file_exists($filename)&&filesize($filename)>0) {
     	$string=file_get_contents($filename);
     	$mesInfo=unserialize($string);
     }
           $mes=compact('number2','choice','password2');
       if(in_array($mes, $mesInfo)){
           echo '这个工号已经存在了<br>"<a href="index1.php">重新登陆</a>"<br>';
           echo "三秒钟之后自动跳转登陆界面";
		   echo "<meta http-equiv='refresh' content='3;url=index1.html'/>";
       } else {
           $mesInfo[]=compact('number2','choice','password2');
		   $mesInfo=serialize($mesInfo);
		if (file_put_contents($filename, $mesInfo)) {
			echo "注册成功<br><a href='index1.php'>马上登陆</a><br>";
			echo "三秒钟之后自动跳转登陆界面";
			echo "<meta http-equiv='refresh' content='3;url=index1.php'/>";
		}else{
			echo "注册失败<br><a href='index2-in.php'>重新添加</a>";
		}
       }
       
		
	
