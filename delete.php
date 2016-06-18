<?php
 header("content-type:text/html;charset:utf-8");
$filename='mesage.txt';
$id=$_GET["id"];
if (file_exists($filename)&&filesize($filename)>0) {
	$string=file_get_contents($filename);
	$mesInfo=unserialize($string);
	$out=$mesInfo[$id]["surplus"];
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>out</title>
	<script>
		window.onload=function()
		{
			var oBtn=document.getElementById("btn");
			var oout=document.getElementById("out-t"); 
            
            oBtn.onclick=function()
            {
            	
            };
		};
	</script>
</head>
<body>
	<input type="text" id="out-t">
	<input type="button" value="出库" id="btn">
</body>
</html>