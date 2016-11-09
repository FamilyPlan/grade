<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>帮助文档</title>
</head>
<body>
<p>1.获取所有打分项目 <a href="../items/0">../items/0</a>后面的数字0为九宫格，1为高速路</p>
<p>2.获取车辆及其抽签序号<a href="../cars">../cars</a>没有参数</p>
<p>
    3.开始比赛<br>
    post<br>
    ../matches</a><br>
    car_id:车辆id<br>
    返回的是创建的比赛的id，需要保存下来以后会用到，<a href="postexample">postexample</a>中是一个例子
</p>
<p>
    4.结束比赛<br>
    put<br>
    ../matches/1,后面的1为收到的比赛的id<br>
    结束比赛: {flag:0}<br>
    添加违规项：{flag:1,traffic_accident_num:数字,intervention_num:数字,foul_num:数字}<br>
    返回的是成功与否，true或false,<a href="postexample">postexample</a>中是一个例子
</p>
</body>
</html>