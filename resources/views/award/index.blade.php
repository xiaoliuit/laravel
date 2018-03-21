<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="1px">
    <tr>
        <td>序号</td>
        <td>订单ID</td>
        <td>抽奖</td>
        <td>操作</td>
    </tr>
    @foreach($data as $val)
     <tr>
        <td><?php echo $val->ID;?></td>
        <td><?php echo $val->orderID;?></td>
        <td><?php echo $val->status;?></td>
        <td><a href="/award/del/<?php echo $val->ID;?>">删除</a><a href="/award/up/<?php echo $val->ID;?>">修改</a></td>
    </tr>
    @endforeach
</table>
</body>
</html>