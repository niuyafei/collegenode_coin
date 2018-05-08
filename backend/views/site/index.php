<?php

/* @var $this yii\web\View */

use yii\widgets\LinkPager;
?>
<!doctype html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta content="width=device-width; initial-scale=1; maximum-scale=1" name="viewport">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>collegenodecoin admin</title>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/iconfont.css" />
</head>

<body>
<nav class="navbar navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a class="navbar-brand" href="#">
                <img src="img/logo.png" width="200" style="margin-top: 15px;" />
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="color-gray p-r-20">
                    您好，管理员
                </li>
                <li>
                    <a href="?r=site/logout" class="text-danger">退出登录</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
<div class="container p-0 admin-cont">
    <!--<div class="col-xs-2">
		<ul class="list-group m-b-0 admin-cont-nav">
			<li class="list-group-item text-center">
				<a href="list.html" class="focus">充币管理</a>
			</li>
		</ul>
	</div>-->
    <div class="col-xs-12">
        <h4 class="text-danger">充币管理</h4>
        <hr class="m-t-5" />
        <div class="p-20 p-t-0">
            <table class="table text-center admin-cont-table-col" style="margin-bottom: 0;">
                <thead>
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">钱包地址</th>
                    <th class="text-center">钱币数量</th>
                    <th class="text-center">时间</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($data as $key => $value): ?>
                    <tr>
                        <td><?= $value['id'] ?></td>
                        <td class="text-center"><?= $value['wallet_url'] ?></td>
                        <td class="text-center"><?= $value['coins'] ?></td>
                        <td class="text-center"><?= $value['create_time'] ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
            <hr class="m-0" style="margin-top: 0;" />
            <nav class="text-center">
                <?= LinkPager::widget(['pagination' => $pages]) ?>
            </nav>
        </div>
    </div>
</div>
<footer>
    <hr />
    <div class="container">
        <div class="row">
            <div class="col-xs-12 p-0 text-center">
                <p class="m-t-10 color-gray">
                    collegenode © 2018 collegenode coin
                </p>
            </div>
        </div>
    </div>
</footer>

<!-- Placed at the end of the document so the pages load faster -->
<script src="bootstrap/js/jquery-2.1.3.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="bootstrap/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>