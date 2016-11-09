<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>无人车比赛</title>
	<style type="text/css">
		body{
			position: relative;
			background-color: rgb(0, 0, 0);
		}
		.wrapper{
			width: 960px;
			background: rgba(247,94,69,0.8);
			position: absolute;
			left: 50%;
			top: 150px;
			transform: translateX(-50%);
		}
		.header{
			width: 100%;
			height: 82px;
			line-height: 82px;
			background-image: url('../img/logo.png');
			background-repeat:no-repeat; 
			background-size: 260px 70px;
			background-position: 12px 8px;
			padding-left: 111px;
			color: #fff;
			font-size: 40px;
			font-weight: bolder;
			text-align: center;
		}
		.header>img{
			position: absolute;
			width: 79px;
			height: 58px;
			right: 17px;
			top: 16px;
		}
		.logo{
			text-align: center;
		}
		.logo>img{
			width: 286px;
			height: 229px;
			margin-top: 20px;
		}
		.score-list{
			text-align: center;
			font-size: 0;
		}
		.score-list>.item{
			display:inline-block;
			width: 230px;
			background-color: #fff;
			border-top-left-radius: 8px;
			border-top-right-radius: 8px;
			box-shadow: 2px 2px 0 #DCD7CD;
			text-align: center;
			background-size: 88px 128px;
			background-position: 71px 10px;
			background-repeat: no-repeat;
			position: relative;
		}
		.second{
			height: 270px;
			margin-top: 30px;
			background-image: url('../img/second.png');
		}
		.first{
			height: 300px;
			border-left: 2px solid #e2e2e2;
			border-right: 2px solid #e2e2e2;
			background-image: url('../img/first.png');
		}
		.third{
			height: 240px;
			margin-top: 60px;
			background-image: url('../img/third.png');
		}
		.item-cont{
			position: absolute;
			width: 100%;
			bottom: 0;
			left: 0;
			text-align: center;
		}
		.item-title{
			font-size: 28px;
			font-weight: bolder;
			line-height: 1.5;
		}
		.item-score{
			font-size: 20px;
			font-weight: bolder;
			line-height: 1.5;
		}
		.item-score label{
			color: #f55f4c;
			font-size: 22px;
			margin-right: 10px;
		}
		.other-score{
			text-align: center
		}
		.other-score>ul{
			list-style: none;
			padding: 0;
			margin: 0 auto;
			background: #fff;
			width: 694px;
		}
		.other-score li{
			border-bottom: 1px solid #DCD7CD;
		}
		.other-score li label{
			display: inline-block;
			height: 100px;
			line-height: 100px;
			text-align: center;
		}
		.other-rank{
			width: 15%;
			font-size: 24px;
			color: #464547;
			font-weight: bolder;
		}
		.other-school{
			width: 55%;
			font-size: 24px;
			color: #464547;
			font-weight: bolder;
		}
		.other-fenshu{
			width: 28%;
			font-size: 24px;
			color: #f55f4c;
			font-weight: bolder;
		}
	</style>
	<script type="text/javascript" src="{{asset('js/jquery.js') }}"></script>
	<script type="text/javascript" src="{{asset('js/jquery.fireworks.js') }}"></script>	
</head>
<body>
	<div class="yanhua"></div>
	<div class="wrapper">
		<div class="header">
			<label>2016中国智能车未来挑战赛</label>
			<img src="../img/logo1.png" alt="">	
		</div>
		<div class="top-three">
			<div class="logo">
				<img src="../img/jbn.png" alt="">
			</div>
			<div class="score-list">
				<div class="second item"></div>
				<div class="first item">
					<div class="item-cont">
						<p class="item-title">西安交通大学</p>
						<p class="item-score">比赛成绩：<label>96.5分</label></p>
					</div>
				</div>
				<div class="third item"></div>
			</div>
		</div>
		<div class="other-score">
			<ul>
				<li>
					<label class="other-rank">4</label>
					<label class="other-school">同济大学</label>
					<label class="other-fenshu">92.3分</label>
				</li>
				<li>
					<label class="other-rank">5</label>
					<label class="other-school">同济大学</label>
					<label class="other-fenshu">92.3分</label>
				</li>
			</ul>
		</div>
	</div>
</body>
<script type="text/javascript">
	$('.yanhua').fireworks({ 
	  sound: false, // sound effect
	  opacity: 1, 
	  width: '100%', 
	  height: '100%' 
	});
</script>
</html>