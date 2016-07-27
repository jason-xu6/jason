<?php
  header("content-type:text/html;charset:gb2312");
$number2=$_POST['number'];
$choice=$_POST['username'];
$password2=$_POST['password'];
$filename='register.txt';
     
     if (file_exists($filename)&&filesize($filename)>0) {
     	$string=file_get_contents($filename);
     	$mesInfo=unserialize($string);
     }
           $mes=compact('number2','choice','password2');
       if(in_array($mes, $mesInfo)){
           echo "正在登陆...";
           if ($choice=="收银管理人员") {
             echo "<meta http-equiv='refresh' content='1;url=index3.php'/>";
           }elseif ($choice=="仓库管理人员") {
             echo "<meta http-equiv='refresh' content='1;url=index2.php'/>";
           }elseif ($choice=="销售管理人员") {
             echo "<meta http-equiv='refresh' content='1;url=index4.php'/>";
           }
		       
       } else {
           echo '工号错误<br><a href="index.html">重新登陆</a>"<br>';
           echo "三秒钟之后自动跳转登陆界面";
           echo "<meta http-equiv='refresh' content='3;url=index.html'/>";
       }
       
		
	
