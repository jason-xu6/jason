
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>这个是第二个</title>
	<style>
	*{
		padding:0;
		margin:0;
	}
	#warehouse_wrap{
		position: relative;
		width:1200px;
		height:700px;
		background-color:#f3f3f3;
		margin:0 auto;
		overflow: hidden;
	}
	#warehouse_top{
		width:100%;
		height:10%;
		background-color:#a0cad9;
	}
	#warehouse_centent{
		width:100%;
		height:80%;
		background-color:#e1edf2;
	}
	#centent_center{
		width:80%;
		height:100%;
		float: left;
	}
	#centent_center form{
		width:100%;
		height:100%;
	}
	#warehouse_fotter{
		width:100%;
		height:10%;
		background-color:#8d999e;
	}
	#centent_nav{
		width:20%;
		height:100%;
		background-color:#29a8dd;
		float: left;
	}
	#centent_nav ul{
		list-style: none;
		color:#fff;
		text-align: center;
	}
	#centent_nav ul li{
		font-family: "微软雅黑";
		font-size: 20px;
		line-height: 50px;
		cursor:pointer;
	}
	#centent_nav ul li a{
		text-decoration: none;
		color: #fff;
		display: inline-block;
		width:100%;
		height:100%;
	}
	#centent_nav ul li:hover{
		background-color:#2a7b97;
	}
	#centent_nav p{
		padding-left: 10px;
		background-color:#45889f;
		line-height: 40px;
		text-align:center;
	}
	#centent_nav .active{
		background-color:#2a7b97;
	}
	#fotter{
		width:395px;
		margin:0 auto;
		padding-top:10px;
	}
	#fotter span{
		border-right: 1px #333 solid;
		width: 100px;
		display: inline-block;
		margin-left: 24px;
	}
	address{
		display: inline-block;
		font-size: 18px;
		margin-top:10px;
		width:100%;
		text-align: center;
	}
	#fotter #lian{
		border:none;
	}
	#top_account{
		width:20%;
		height:100%;
		background-color:#1e83a9;
		float:left;
		position: relative;
	}
	#top_account img{
		margin-left: 87px;
		margin-top: 3px;
		cursor:pointer;
	}
	#account_login{
		width:100%;
		height:300px;
		background-color:#1e83a9;
		position: absolute;
		left: -100%;
		top: 70px;
		transition: all 1s;
	}
	#account_login ul li{
		list-style: none;
		cursor:pointer;
		text-align: center;
		height:40px;
	}
	#account_login ul li a{
		-webkit-font-smoothing: antialiased;
		font-family: "微软雅黑";
		line-height: 40px;
		font-size:20px;
		color:#fff;
		text-decoration: none;
	}
	#account_login ul li:hover{
		background-color:#103746;
	}
	#top_account:hover #account_login{
		transform:translate(100%);
	}
	#top_title{
		float:left;
		width:80%;
		height:100%;
	}
	#top_title span{
		color:#0b3745;
		line-height: 70px;
		margin:0 auto;
		text-align: center;
		display: block;
		width:400px;
		font-family: "KaiTi";
		font-size: 60px;
		text-shadow: 10px 10px 10px #397f9a;
	}
	#top_title span a{
		text-decoration:none;
	}
	#centent_center p{
		width: 100%;
		height: 40px;
		line-height: 40px;
		margin-left: 20px;
	}
	#centent_center .center_add{
		height:24px;
	}
	#tab{
		position: absolute;
		left: 238px;
		top: 122px;
	}
    #tab tr{
    	height:30px;
    }
    #form-dis{
    	display: block;
    }
	</style>
	<script>
	window.onload=function(){
       var oTab=document.getElementById("tab");
       var oldColor="";
       var oldColor1="";
       for (var i = 0; i<oTab.tBodies[0].rows.length; i++) {
       	   oTab.tBodies[0].rows[i].onmouseover=function(){
       	    oldColor=this.style.background;
       	    oldColor1=this.style.color;
       	   	this.style.background="#013749";
       	   	this.style.color="#fff";
       	   };
       	   oTab.tBodies[0].rows[i].onmouseout=function(){
       	   	this.style.background=oldColor;
       	   	this.style.color=oldColor1;
       	   };
       }

       };
	</script>
</head>
<body>
	<div id="warehouse_wrap">
		<div id="warehouse_top">
			<div id="top_account"><img src="images/account_64px.png" alt="">
                 <div id="account_login">
                 	<ul>
                 		<li><a href="">我的账户</a></li>
                 		<li><a href="">个人中心</a></li>
                 		<li><a href="">账号设置</a></li>
                 		<li><a href="">意见反馈</a></li>
                 		<li><a href="index1.html">退出</a></li>
                 	</ul>
                 </div>
			</div><div id="top_title">
				<span><a href="index1.html">民大科技</a></span>
			</div>
		</div>
		<div id="warehouse_centent">
			<div id="centent_nav">
			    <p>仓库管理人员，您好</p>
				<ul>
					<li><a href="index2.php">主页</a></li>
					<li><a href="index2-se.php">库存查询</a></li>
					<li><a href=""  class="active">商品入库</a></li>
					<li><a href="index2-de.php">商品出库</a></li>
					<li><a href="">关于退货</a></li>
					<li><a href="">关于我们</a></li>
				</ul>
			</div>
			<div id="centent_center">
		<form action="doReceive.php?act=addMessage" method="POST" id="form-dis">
			<table>
				<thead>
					<tr>
						<th>商品编号</th>
						<th>商品名称</th>
						<th>商品价格</th>
						<th>商品库存</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><input type="text" name="num" id="num"></td>
						<td><input type="text" name="username" id="username"></td>
						<td><input type="text" name="price" id="price"></td>
						<td><input type="text" name="surplus" id="surplus"></td>
						<td><input type="submit" value="添加商品"></td>
					</tr>
				</tbody>
			</table>
	    </form>
				
					<table border="1" width="960px" cellpadding="0" cellspacing="0" bgcolor="#31a2c7" id="tab" style="text-align: center">
						<thead>
							<tr>
							    <th>序号</th>
								<th>商品编号</th>
								<th>商品名称</th>
								<th>商品价格</th>
								<th>商品库存</th>
							</tr>
						</thead>
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
				
			</div>
		</div>
		<div id="warehouse_fotter">
		    <div id="fotter">
		    	<span id="ban">版权信息</span>
		    	<span id="zhan">站点地图</span>
		    	<span id="lian">联系我们</span>
		    </div>
			<address>@2016.06.01 徐守杰 南区23#528</address>
		</div>
		
	</div>
</body>
</html>