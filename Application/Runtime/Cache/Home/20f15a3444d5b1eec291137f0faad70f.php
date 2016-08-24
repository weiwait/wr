<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo ($title); ?></title>
	<link rel="stylesheet" type="text/css" href="/wr/Public/css/style.css">
	<script src="/wr/Public/js/jquery-1.9.1.min.js"></script>
	<script src="/wr/Public/js/jquery.SuperSlide.2.1.1.js"></script>
</head>
<style>
	.nav li {
		background: url('/wr/Public/images/line.png') no-repeat right;
	}
	.nav li:last-child {
		background-image: none;
	}
	.prev {
		background: url('/wr/Public/images/left-arrow-big.png') top no-repeat;
		background-size: 78px;
	}
	.prev:hover {
		background: url('/wr/Public/images/left-arrow-big.png') bottom no-repeat;
		background-size: 78px;
	}
	.next {
		background: url('/wr/Public/images/right-arrow-big.png') top no-repeat;
		background-size: 78px;
	}
	.next:hover {
		background: url('/wr/Public/images/right-arrow-big.png') bottom no-repeat;
		background-size: 78px;
	}
	.hd ul li {
		background: url('/wr/Public/images/bullets.jpg') left no-repeat;
	}
	.hd ul .on {
		background: url('/wr/Public/images/bullets.jpg') right no-repeat;
	}
</style>
<body>
	<div class="header">
		<div class="nav-wrap clear">
			<a class="logo" href=""><img src="/wr/Public/images/<?php echo ($logo); ?>"></a>
			<ul class="nav clear">
				<li class="snapshot">snapshot</li>
				<li class="ab">wdl news</li>
				<li>about wdl</li>
				<li>timeline</li>
			</ul>
		</div>
	</div>
	<div class="level-line"></div>
	<div class="title" id="snapshot" name="snapshot">snapshot</div>
	<div class="banner">
		<div class="hd">
			<ul class="clear">
				<li>1</li>
				<li>2</li>
			</ul>
		</div>
		<div class="bd">
			<ul>
				<li><img src="/wr/Public/images/1.jpg" alt=""></li>
				<li><img src="/wr/Public/images/2.jpg" alt=""></li>
			</ul>
		</div>
		<a class="prev" href="javascript:void(0)"></a>
		<a class="next" href="javascript:void(0)"></a>
	</div>
	<script>
		$('.banner').slide({"mainCell": ".bd ul", "autoPlay": false});
		$('.snapshot').click(function() {
			$('html, body').animate({scrollTop: $('#snapshot').offset().top - 200}, 2000);
		});
		$('.ab').click(function() {
			$('html, body').animate({scrollTop: $('#ab').offset().top}, 2000);
		});
	</script>
</body>
</html>