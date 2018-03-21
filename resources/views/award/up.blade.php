<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>标题</title>
</head>
<body>
<form action="/award/addPost/{{$data->ID}}" method="post">
    <input type="hidden" name="_token" value="<?php echo csrf_token();?>">
    <input type="text" name="orderID" value="{{$data->orderID}}">
    <input type="num" name="status" value="{{$data->status}}">
    <input type="submit" value="提交">
</form>
</body>
</html>