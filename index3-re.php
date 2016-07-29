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
	<title>这个是第二个</title>
	<style>
	#main_slide{
		-webkit-user-select: none;
	}
	*{
		padding:0;
		margin:0;
	}
	#warehouse_wrap{
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
		background:-webkit-gradient(linear, 0% 0%, 0% 100%,from(#000348), to(#1c8fed));
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
		text-align:center;
		padding-left: 10px;
		background-color:#45889f;
		line-height: 40px;
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
		background:-webkit-gradient(linear, 0% 0%, 100% 100%,from(#000348), to(#1c8fed));
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
		background:;
	}
	#centent_center p{
		width: 238px;
		height: 40px;
		line-height: 40px;
		margin-left: 273px;
	}
	#centent_center #center_seach{
		height:24px;
	}
	#centent_center #seach_btn{
		cursor:pointer;
		height: 28px;
		width: 66px;
		margin-left: -10px;
		background-color: #00779e;
		color: #fff;
		font-family: "微软雅黑";
		box-shadow: 5px 5px 5px;
		border-radius: 5px 5px;
	}
	#centent_nav .active{
		background-color:#2a7b97;
	}
	#centent_nav li:hover a{
		color:blue;
	}


	#main_slide:hover{
    	transform:scale(1.01);
    }
    #main_slide{
    	transition:all 0.3s linear;
    	cursor:pointer;
    	float: left;
		width:600px;
		height:400px;
		position: relative;
		overflow: hidden;
		top: 55px;
		left:175px;
	}
	#list_slide{
		width:4200px;
		height:400px;
		position: absolute;
		left:0px;
	}
	#list_slide img{
		width:600px;
		height:400px;
		float:left;
	}
	#ctrl_slide{
		position: absolute;
	    left: 218px;
	    bottom: 20px;
	    text-align: center;
	}
	.span_slide{
		border-radius: 50%;
	    width: 30px;
	    height: 30px;
	    background-color: #b3b4cc;
	    display: inline-block;
	    box-sizing: border-box;
	    color: #000;
	    padding-top: 5px;
	    cursor:pointer;
	}
	.active_slide{
		color:#fff;
		background-color:#302351;
	}
	#btn_left_slide{
		text-align: center;
		position: absolute;
	    left: 10px;
	    top: 170px;
	    z-index: 1;
	    font-size: 50px;
	    color: #fff;
	    width: 52px;
	    height: 60px;
	    background-color: #1b1e1b;
	    cursor:pointer;
	    opacity: 0;
	    transition:opacity 1s;
	}
	#btn_right_slide{
		text-align: center;
		position: absolute;
	    right: 10px;
	    top: 170px;
	    z-index: 1;
	    font-size: 50px;
	    color: #fff;
	    width: 52px;
	    height: 60px;
	    background-color: #1b1e1b;
	    cursor:pointer;
	    opacity: 0;
	    transition:opacity 1s;
	}
	#main_slide:hover .btn_slide{
		opacity:1;
	}
	#thisisshuzi{
		text-align: center;
		width: 50px;
		height: 50px;
		position: absolute;
		z-index: 999;
		right: 100px;
		bottom: 0px;
	}
	#top_title a{
		text-decoration:none;
	}
	#thisisshuzi{
		font-size: 20px;
	}
	#fotter_fot{
		width:395px;
		margin:0 auto;
		padding-top:10px;
	}
	#fotter_fot span{
		border-right: 1px #333 solid;
		width: 100px;
		display: inline-block;
		margin-left: 24px;
	}
	#submit3{
		background-color:#0d4697;
		color:#fff;
		padding:3px;
		cursor:pointer;
	}
	</style>
	<script src="jquery-2.2.3.js"></script>
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
	<script>
		$(document).ready(function(){
			var i=0;
			var clone=$(".img_slide").first().clone();
			$("#list_slide").append(clone);
			var size=$(".img_slide").size();
			$(".span_slide").first().addClass('active_slide');

			//下面那个小圆圈点击
			$(".span_slide").click(function(){
				var index=$(this).index();
				i=index;
				$("#list_slide").stop().animate({left:-index*600},600);
				$(this).addClass('active_slide').siblings().removeClass('active_slide');

			$("#thisisshuzi").text(index+1+"/5");
			});
			$("#thisisshuzi").text(i+1+"/5");

             //自动轮播
             var timer=setInterval(function(){
             	i++;
             	move();
             }, 3000);
              //鼠标移入停止
             $("#main_slide").mouseover(function(){
             	clearInterval(timer);
             });
             //鼠标移出开始
              $("#main_slide").mouseout(function(){
              	timer=setInterval(function(){
              		 i++;
              		 move();
              	}, 3000);
              });
			//左边点击
		$("#btn_left_slide").click(function(){
			        i--;
				move();
			});
		    //右边点击
		$("#btn_right_slide").click(function(){
			      i++;
			    move();
			});

		//移动函数
		function move(){
			var b=0;
                 if (i<1) {
                 	b=5;
			$("#thisisshuzi").text(b+1+"/5");
                 }else if (i==5) {
                 	b=0;
			$("#thisisshuzi").text(b+1+"/5");
                 }else if (i==6) {
                 	b=1;
			$("#thisisshuzi").text(b+1+"/5");
                 }
                 else{
                 	if (i==size-1) {
                 		b=2;
			$("#thisisshuzi").text(b+1+"/5");
                 	}
                 	b=i;
			$("#thisisshuzi").text(b+1+"/5");
                 }
				if (i<0) {
					$("#list_slide").css({left:-(size-1)*600+"px"});
					i=size-2;
				}
             	if (i>size-1) {
             		$("#list_slide").css({left: 0});
             		i=1;
             	}
             	$("#list_slide").stop().animate({left:-i*600},600);
             		if (i==size-1) {
             		
             	$(".span_slide").eq(0).addClass('active_slide').siblings().removeClass('active_slide');
             	}else{
             	$(".span_slide").eq(i).addClass('active_slide').siblings().removeClass('active_slide');}
		}
		});
	</script>
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
			<div id="top_account"><a href="index.html"><img src="images/account_64px.png" alt=""></a>
                 <div id="account_login">
                 	<ul>
                 		<li><a href="">我的账户</a></li>
                 		<li><a href="">个人中心</a></li>
                 		<li><a href="">账号设置</a></li>
                 		<li><a href="">意见反馈</a></li>
                 		<li><a href="index.html">退出</a></li>
                 	</ul>
                 </div>
			</div><div id="top_title">
				<a href="index.html"><span>民大科技</span></a>
			</div>
		</div>
		<div id="warehouse_centent">
			<div id="centent_nav">
			    <p>收银人员，您好</p>
				<ul>
					<li><a href="index3.php">主页</a></li>
					<li><a href="index3-re.php" class="active">收银</a></li>
				</ul>
			</div>
			<div id="centent_center">
				<form action="sell.php" method="POST">
					<table border="1" width="100%" height="" cellpadding="0" cellspacing="0" bgcolor="#31a2c7" id="tab" style="text-align: center">
						<thead>
							<tr style="height: 30px">
								<th>商品编号</th>
								<th>商品名称</th>
								<th>商品价格</th>
								<th>商品数量</th>
							</tr>
						</thead>
						<tbody>
							<tr style="height: 30px">
								<td><input type="text" id="num" name="num"></td>
								<td><input type="text" id="name" name="name"></td>
								<td><input type="text" id="price" name="price"></td>
								<td><input type="text" id="surplus" name="surplus"></td>
								<td><input type="submit" value="出售" id="submit3"></td>
							</tr>    	
						</tbody>
					</table>
				</form>
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