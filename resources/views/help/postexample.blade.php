<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>PostExample</title>
</head>
<body>
车辆号<input id="car_id" type="text"><br>
<button onclick=postExample()>postExample</button><br>
match_id<input type="text" id="match_id"><br>
<button onclick="putExample()">putExample</button>
<script src="//cdn.bootcss.com/jquery/3.1.1/jquery.min.js"></script>
<script src={{asset("/js/postExample.js")}}></script>
</body>
</html>