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
<h2>添加抽奖信息</h2>
<form action="" method="post">
    <input type="text" name="orderID">
    <input type="hidden" name="_token" value="<?php echo csrf_token();?>">
    <input type="number" name="status">
    <br>
    <input type="submit" value="提交">
</form>
</body>
</html>