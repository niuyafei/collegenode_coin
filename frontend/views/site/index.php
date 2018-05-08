<?php

?>
<!DOCTYPE html>
<html lang="zh-CN">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
	<title>collegenode coin</title>
	<!-- Bootstrap -->
	<link href="bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
<div class="index">
	<nav class="navbar navbar-default index-nav">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<a class="navbar-brand" href="?r=site/index"><img src="img/logo.png" width="172" /></a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="navbar">
				<ul class="nav navbar-nav navbar-right">
					<li class="active">
						<span class="nav-right" onclick="window.location.href='index.html'">下载钱包</span> <img src="img/icon.png" width="35" />
					</li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>
	<div class="container">
		<div class="cat-style">
			<a id="genertCoins" href="#"><img src="img/cat.gif" width="300" /></a>
			<p class="text-center m-t-10" style="color: #fdb928;">点击招财猫可出幸运币，多点多得哦!</p>
		</div>
	</div>
	<div class="index-bottom">
		<div class="container text-center" id="coins">
			<small><span>0</span>个</small>
			<a class="btn btn-lg btn-danger" data-toggle="modal" data-target="#coinin">存入钱包</a>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="coinin">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">存入钱包</h4>
			</div>
			<div class="modal-body">
				<input type="text" name="" id="wallet_url" value="" class="form-control" placeholder="点击输入钱包地址" />
			</div>
			<div class="modal-footer">
				<button type="button" id="add-wallet" class="btn btn-danger btn-block btn-lg">存入</button>
				<div class="modal-footer-text">还没有钱包地址？<a href="" class="text-danger">点击下载钱包</a></div>
			</div>
		</div>
	</div>
</div>
<!-- jQuery (Bootstrap 的所有 JavaScript 插件都依赖 jQuery，所以必须放在前边) -->
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script src="bootstrap-3.3.7-dist/js/modal-middle.js"></script>
</body>
<script>
	window.onload = function(){
		num = parseInt(Math.random()*20);
		if(num < 1){
			num = 1
		}
		clicks = 0;
		coins = 0;
		console.log(num);
	}
	$("#genertCoins").click(function(){
		if(clicks > num){
			alert("次数已用完");
			return false;
		}
		clicks = clicks + 1;
		s = Math.floor(Math.random() * 10);
		if(s%2==0){
			coins = coins +1;
		}
		var html = "";
		for(i=0; i<coins; i++){
			html += "<img src=\"img/coin.png\" />";
		}
		html += "<small><span>"+coins+"</span>个</small>";
		html += "<a class=\"btn btn-lg btn-danger\" data-toggle=\"modal\" data-target=\"#coinin\">存入钱包</a>";
		$("#coins").html(html);
	});

	$("#add-wallet").click(function(){
		var wallet = $("#wallet_url").val();
		$.post("index.php?r=site/add-coins", {"coins": coins, "wallet": wallet}, function(re){
			if(re.code == 200){
				//成功
				if(confirm("存入成功") == true){
					window.location.reload();
				}
			}else{
				//失败
				message = re.message;
				alert('存入失败');
			}
		});
	});
</script>
</html>