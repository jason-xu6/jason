<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<?php
$array=array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o');
$offset=array_search('h',$array);
echo $offset."</br>";

?>
</head>
<body>
	<input type="text" id="text">
	<input type="button" id="btn" value="提交">
</body>
</html>