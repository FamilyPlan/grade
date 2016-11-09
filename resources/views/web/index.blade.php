<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>无人车比赛裁判评分系统</title>
	<link rel="stylesheet" href="{{asset('css/style.css') }}" />
</head>
<body>
	<div class="container">
		<section class="section header">
			<h1>无人车比赛裁判评分系统</h1>
		</section>
		<section class="section nav">
			<div class="deal">
				<div class="deal-kind" for="">抽签序号</div>
				<div class="selec-wrap">
				  <select id="J_SlecNum"></select>
				</div>
			</div>
			<!-- <div class="deal">
				<div class="deal-kind" for="">车队名称</div>
				<div class="selec-wrap selec-large">
				  <select id="J_SlecCar">
				      <option value="西安交通大学">西安交通大学</option>
				      <option value="西安交通大学">西安交通大学</option>
				      <option value="西安交通大学">西安交通大学</option>
				  </select>
				</div>
			</div> -->
			<div class="deal">
				<a id="J_GaoSu" href="javascript:void(0);" class="a-btn btn-start">高速测试</a>
			</div>
			<div class="deal">
				<a id="J_JiuGg" href="javascript:void(0);" class="a-btn btn-start">九宫格测试</a>
			</div>
			<div class="deal">
				<a id="J_BtnStart" href="javascript:void(0);" class="a-btn btn-start">开始比赛</a>
			</div>
			<div class="deal">
				<a id="J_BtnEnd" href="javascript:void(0);" class="a-btn btn-end">结束比赛</a>
			</div>
			<div class="deal">
				<a id="J_BtnQuit" href="javascript:void(0);" class="a-btn btn-quit">退赛</a>
			</div>
		</section>
		<section class="section checkpoint">
			<h2>比赛赛段考核信息</h2>
			<section class="section" id="J_CheckPoint">
			</section>
		</section>
		<section class="section interv">
			<ul class="interv-list" id="J_IntervBox">
				<li>
					<div class="interv-type">交通事故次数</div>
					<div class="interv-deal">
						<a id="J_AcciD" href="javascript:void(0);" class="interv-btn">—</a>
						<input type="text" value=0 class="interv-num" id="J_AccidentNum">
						<a id="J_AcciA" href="javascript:void(0);" class="interv-btn">+</a>
					</div>
				</li>
				<li>
					<div class="interv-type">人工干预次数</div>
					<div class="interv-deal">
						<a id="J_IntervD" href="javascript:void(0);" class="interv-btn">—</a>
						<input type="text" value=0 class="interv-num" id="J_IntervNum">
						<a id="J_IntervA" href="javascript:void(0);" class="interv-btn">+</a>
					</div>
				</li>
				<li>
					<div class="interv-type">点外违规记录</div>
					<div class="interv-deal">
						<a id="J_IllD" href="javascript:void(0);" class="interv-btn">—</a>
						<input type="text" value=0 class="interv-num" id="J_IllNum">
						<a id="J_IllA" href="javascript:void(0);" class="interv-btn">+</a>
					</div>
				</li>
				<li>
					<a id="J_OtherBtn" href="javascript:void(0);" class="a-btn btn-score">提交违规情况</a>
				</li>
			</ul>	
		</section>
		<!-- <section class="section score">
			<div class="deal">
				<div class="deal-kind" for="">比赛成绩</div>
				<input type="text" class="score-val">
			</div>
			<div class="deal a-deal">
				<a href="javascript:void(0);" class="a-btn btn-score">提交成绩</a>
			</div>
		</section> -->
	</div>

</body>
<script type="text/javascript" src="{{asset('js/jquery.js') }}"></script>
<script type="text/javascript" src="{{asset('js/index.js') }}"></script>
</html>