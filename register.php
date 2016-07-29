<?php
  header("content-type:text/html;charset:gb2312");
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
           echo 'Already exists<br>"<a href="index.html">Re login</a>"<br>';
           echo "Three seconds after the automatic jump landing interface";
		   echo "<meta http-equiv='refresh' content='3;url=index1.html'/>";
       } else {
           $mesInfo[]=compact('number2','choice','password2');
		   $mesInfo=serialize($mesInfo);
		if (file_put_contents($filename, $mesInfo)) {
			echo "login was successful<br><a href='index.html'>Landing at once</a><br>";
			echo "Three seconds after the automatic jump landing interface";
			echo "<meta http-equiv='refresh' content='3;url=index.html'/>";
		}else{
			echo "login has failed<br><a href='index2-in.php'>Re add</a>";
		}
       }
       
		
	
