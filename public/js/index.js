
$(function(){
	var carMatchInfo=[];
	// 获取车辆的列表以及抽签号
	$.ajax({
		url:'../car',
		type:'GET',
		success:function(res){
			var data=JSON.parse(res),htm='';
			for(var i in data){
				var item=data[i];
				htm+='<option  value="'+item.id+'">'+item.order+'</option>';
			}
			$("#J_SlecNum").html(htm);
		}
	})
	// 获取所有任务点内容
	$("#J_GaoSu").on("click",function(){
		alert("获取高速路段测试信息");
		$.ajax({
			url:'../items/1',
			type:'GET',
			success:function(res){
				var data=JSON.parse(res),htm='';
				for(var i in data){
					var item=data[i],points=item.points,listhtm='';
					for(var j in points){
						var point=points[j];
						listhtm+='<div class="list-item"><p class="item-title">'+point.name+'</p><p class="item-radio item-radio-y"><input type="radio" value="'+point.right_score+'" name="'+point.item_id+'" class="check" id="'+point.id+'"><label for="'+point.id+'">是</label></p><p class="item-radio"><input type="radio" value="'+point.wrong_score+'" name="'+point.item_id+'" class="check" id="'+point.id+'"><label for="'+point.id+'">否</label></p></div>';
					}
					htm+='<div id="J_CheckBox"+"'+item.id+'" class="check-box"><div href="javascript:void(0)" class="list-title"><label>'+item.name+'</label><a href="javascript:void(0);" data-id="'+item.id+'" class="a-btn btn-score btn-submitUnit">提交成绩</a></div><div class="list-cont">'+listhtm+'</div></div>';
				}
				$('#J_CheckPoint').html(htm);
			}
		})
	})
	$("#J_JiuGg").on("click",function(){
		alert("获取九宫格路段测试信息");
		$.ajax({
			url:'../items/0',
			type:'GET',
			success:function(res){
				var data=JSON.parse(res),htm='';
				for(var i in data){
					var item=data[i],points=item.points,listhtm='';
					for(var j in points){
						var point=points[j];
						listhtm+='<div class="list-item"><p class="item-title">'+point.name+'</p><p class="item-radio item-radio-y"><input type="radio" value="'+point.right_score+'" name="'+point.item_id+'" class="check" id="'+point.id+'"><label for="'+point.id+'">是</label></p><p class="item-radio"><input type="radio" value="'+point.wrong_score+'" name="'+point.item_id+'" class="check" id="'+point.id+'"><label for="'+point.id+'">否</label></p></div>';
					}
					htm+='<div id="J_CheckBox"+"'+item.id+'" class="check-box"><div href="javascript:void(0)" class="list-title"><label>'+item.name+'</label><a href="javascript:void(0);" data-id="'+item.id+'" class="a-btn btn-score btn-submitUnit">提交成绩</a></div><div class="list-cont">'+listhtm+'</div></div>';
				}
				$('#J_CheckPoint').html(htm);
			}
		})
	})
	
	// 设置一个比赛ID
	// 车辆点击开始按钮
	$("#J_BtnStart").on("click",function(){
		// 将车辆信息传给数据库，并且记下比赛开始时间
		$.ajax({
			url:'../matches',
			type:'POST',
			data:{
				car_id:$("#J_SlecNum option:selected").val(),
			},
			success:function(res){
				alert("开始比赛");
				var carId=$("#J_SlecNum option:selected").val();
				var match_id=parseInt(res);
				carMatchInfo[carId]=match_id;
			}
		})
	})	
	// 监听提交成绩
	$("#J_CheckPoint").on("click",'.btn-submitUnit',function(){
		var checkPointId=$(this).attr("data-id"),checkBox="#J_CheckBox"+checkPointId,score=0;
		$(checkBox).find("input[type=radio]:checked").each(function(i,v){
			score+=parseInt($(this).val());
		});
		$.ajax({
			url:'../scores',
			type:'POST',
			data:{
				car_id:$("#J_SlecNum option:selected").val(),
				point_id:checkPointId,
				score:score
			},
			success:function(){
				alert("提交成功！");
			}
		})
	})
	
	// 监听违规信息
	$("#J_OtherBtn").on("click",function(){
		var carId=$("#J_SlecNum option:selected").val();
		var u='../matches/'+carMatchInfo[carId];
		$.ajax({
			url:u,
			type:'PUT',
			data:{
				flag:1,
				car_id:carId,
				traffic_accident_num:$('#J_AccidentNum').val(),
				intervention_num:$('#J_IntervNum').val(),
				foul_num:$("#J_IllNum").val()
			},
			success:function(){
				alert('提交成功');
				$("#J_IntervBox input").each(function(i,v){
					$(this).val(0)
				})
			}
		})
	})

	// 结束比赛
	$("#J_BtnEnd").on("click",function(){
		var carId=$("#J_SlecNum option:selected").val();
		// 将车辆信息传给数据库，并且记下比赛开始时间
		var u='../matches/'+carMatchInfo[carId];
		$.ajax({
			url:u,
			type:'PUT',
			data:{
				flag:0,
				car_id:$("#J_SlecNum option:selected").val()
			},
			success:function(res){
				alert("结束比赛");
			}
		})

	})

	// 中途退出比赛
	$("#J_BtnQuit").on("click",function(){
		$.ajax({
			url:'',
			type:'GET',
			data:{
				carNum:$("#J_SlecNum option:selected").val(),
				flag:2
			},
			success:function(res){
				alert("退出比赛");
			}
		})
	})







})