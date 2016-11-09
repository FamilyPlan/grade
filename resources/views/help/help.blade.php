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
<p>2.获取车辆及其抽签序号<a href="../car">../car</a>没有参数</p>
<p>
    3.开始比赛<br>
    post<br>
    ../matches<br>
    car_id:车辆id；group:比赛类型，0为九宫格，1为高速公路<br>
    true/false<br>
    <a href="postexample">postexample</a>中是一个例子
</p>
<p>
    4.结束比赛/中途退赛<br>
    put<br>
    ../matches/1,后面的1车辆id<br>
    结束比赛: {flag:1，group:比赛类型，0为九宫格，1为高速公路}<br>
    中途退赛：{flag:2，group:同上}<br>
    返回的是成功与否，true或false,<a href="postexample">postexample</a>中是一个例子
</p>
<p>
    5.打分<br>
    post<br>
    ../scores<br>
    参数{group:比赛类型，同上；car_id:车辆id,point_id:评分条目id是下面小项的id,score:小项的得分}<br>
    返回的是成功与否，点击提交按钮后遍历下面的小项，然后一条一条的提交
</p>
<p>
    6.获取车辆列表<br>
    get<br>
    <a href="../mactches/get_list/0">../mactches/get_list/0</a>获取所有已经完成比赛的车辆<br>
    <a href="../mactches/get_list/1">../mactches/get_list/1</a>获取所有未开始比赛的车辆<br>
</p>
<p>
    7.添加违规项<br>
    post<br>
    ../matcher/add_violation<br>
    car_id:车辆id;group:比赛类型，0为九宫格，1为高速公路;traffic_accident_num:交通事故次数；intervention_num:人工干预测试;foul_num:违规次数<br>
    true/false
</p>
</body>
</html>