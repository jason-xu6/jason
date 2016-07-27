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
             }, 6000);
              //鼠标移入停止
             $("#main_slide").mouseover(function(){
             	clearInterval(timer);
             });
             //鼠标移出开始
              $("#main_slide").mouseout(function(){
              	timer=setInterval(function(){
              		 i++;
              		 move();
              	}, 6000);
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