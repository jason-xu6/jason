<?php
   
     
     $username=$_GET['username'];
     $age=$_GET['age'];
     $kucun=time();
     $users[]=array('id'=>1,'username'=>'king','age'=>12,'sex'=>2342);
     $users[]=array('id'=>2,'username'=>'sfdng','age'=>54,'sex'=>223);
     $users[]=array('id'=>3,'username'=>'df','age'=>162,'sex'=>235);
     $users[]=array('id'=>4,'username'=>'kisng','age'=>322,'sex'=>213);
     $users[]=array('id'=>5,'username'=>'kibng','age'=>23,'sex'=>'女');
     $users[]=array('id'=>6,'username'=>'kieng','age'=>42,'sex'=>263);
     $users[]=array('id'=>7,'username'=>'kigng','age'=>23,'sex'=>283);
     $users[]=array('id'=>8,'username'=>'kisng','age'=>5,'sex'=>234);
     $users[]=array('id'=>9,'username'=>'kirng','age'=>162,'sex'=>239);
     $users[]=array('id'=>10,'username'=>'kiqng','age'=>172,'sex'=>233);
     $users[]=array('id'=>11,'username'=>'kding','age'=>182,'sex'=>623);
     $users[]=array('id'=>12,'username'=>'kidfng','age'=>192,'sex'=>823);
     $users[]=array('id'=>13,'username'=>$username,'age'=>$age,'sex'=>$kucun);



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script>
		window.onload=function()
		{
			var oldColor="";
			var tr=document.getElementById("tab");
			for (var i = 0; i<tab.tBodies[0].rows.length; i++) {
				tab.tBodies[0].rows[i].onmouseover=function(){
                      
                     oldColor=this.style.background;
                     this.style.background="#053848";

				};
				tab.tBodies[0].rows[i].onmouseout=function(){
                      
                     
                     this.style.background=oldColor;

				};
			}
		};
	</script>
</head>
<body>
	<h3>用户列表页</h3>

	<table id="tab" border="1" width="80%" height="500px" cellpadding="0" cellspacing="0" bgcolor="#03607c" style="text-align: center;color:#a4e8fd;">
	    <thead>
	    	<tr>
	    		<th>商品编号</th>
	    		<th>商品名称</th>
	    		<th>商品价格</th>
	    		<th>商品库存</th>
	    	</tr>
	    </thead>
		<tbody>
			<!-- <tr>
				<td>001</td>
				<td>辣条</td>
				<td>0.5</td>
				<td>100</td>
			</tr>
			<tr>
				<td>002</td>
				<td>豆皮</td>
				<td>2.5</td>
				<td>300</td>
			</tr><tr>
				<td>003</td>
				<td>冰红茶</td>
				<td>2.5</td>
				<td>120</td>
			</tr><tr>
				<td>004</td>
				<td>脉动</td>
				<td>4.0</td>
				<td>82</td>
			</tr> -->
			<?php 
			    foreach ($users as $user) {
			    	
			    
			 ?>
			<tr>
				<td><?php echo $user['id']; ?></td>
				<td><?php echo $user['username']; ?></td>
				<td><?php echo $user['age']; ?></td>
				<td><?php echo $user['sex']; ?></td>
			</tr>
			<?php }?>
		</tbody>
	</table>
</body>
</html>