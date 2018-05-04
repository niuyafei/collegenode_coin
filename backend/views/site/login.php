<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

?>

<!doctype html>
<html lang="zh-CN">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->

        <title>collegenodecoin admin</title>

        <!-- Bootstrap core CSS -->
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>

    <body>
        <div class="site-wrapper">
            <div class="site-wrapper-inner">
                <div class="container">
                    <div class="index-main-body">
                        <img src="img/logo.png" width="250"/>
                        <h4 class="logo-slogn" style="margin-top: 15px;">后台管理中心</h4>
                        <div class="p-10 m-t-20">
                            <div role="tabpanel" class="tab-pane fade in active" id="login">
                                <form class="form-signin" method="post" action="?r=site/login">
                                    <div class="form-boxline">
                                        <label for="inputEmail" class="sr-only">邮箱</label>
                                        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="邮箱" required="" autofocus="">
                                        <hr class="form-middleline" />
                                        <label for="inputPassword" class="sr-only">密码</label>
                                        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="密码" required="">
                                    </div>
                                    <button class="btn btn-lg btn-danger btn-block m-t-20" type="submit">登录</button>
                                </form>
                                <div class="p-t-10 color-ad">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <link rel="stylesheet" type="text/css" href="css/login.css" />
        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="bootstrap/js/jquery-2.1.3.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="bootstrap/js/ie10-viewport-bug-workaround.js"></script>
        
    </body>

</html>