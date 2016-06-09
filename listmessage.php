<?php
 header("content-type:text/html;charset:utf-8");
$filename='mesage.txt';
if (file_exists($filename)&&filesize($filename)>0) {
	$string=file_get_contents($filename);
	$mesInfo=unserialize($string);
	if (!is_array($mesInfo)) {
		echo "出错了，请重新添加";
		echo "<meta http-equiv='refresh' content='3;url=postform.html'/>";
	}
}else{
	echo "没有留言请添加；<br>3秒钟之后跳转到添加页面";
	echo "<meta http-equiv='refresh' content='3;url=postform.html'/>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>listmessage</title>
	<style>
	#tab{
		text-align: center;
		cursor: pointer;
	}
	</style>
  <script>
  	window.onload=function()
  	{
  		var tab=document.getElementById("tab");
  		var oldColor="";
  		for (var i = 0; i<tab.tBodies[0].rows.length; i++) {
  			tab.tBodies[0].rows[i].onmouseover=function()
  			{
                   oldColor=this.style.background;
                   this.style.background="blue";
                   this.style.color="#fff";
  			};
  			tab.tBodies[0].rows[i].onmouseout=function()
  			{
                   this.style.background=oldColor;
                   this.style.color="#000";
  			};
  		}
  	};
  </script>
</head>
<body>
         <h2>商品列表页面<a href="postform.html">继续添加</a></h2>
		<table id="tab" border="1px"  width="80%" cellpadding="0" cellspacing="0" bgcolor="#eaeaea" margin-left="50px">
		    <thead><tr>
		        <th>标号</th>
				<th>商品编号</th>
				<th>商品名称</th>
				<th>商品价格</th>
				<th>商品库存</th>
			</thead>
			</tr>
			<tbody>
			<?php $i=1; foreach ($mesInfo as $now):?>
			
			    <tr>
			        <td><?php  echo $i; ?></td>
					<td><?php echo $now['num']; ?></td>
					<td><?php echo $now['username']; ?></td>
					<td><?php echo $now['price']; ?></td>
					<td><?php echo $now['surplus']; ?></td>
				</tr>
		    <?php $i++; endforeach;?>
			</tbody>
		 </table>
</body>
</html>