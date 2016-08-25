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
	.play {
		background: url('/wr/Public/images/pause-black.png') bottom no-repeat;
	}
	.play .play-left {
		background: url('/wr/Public/images/rotator-black.png') left no-repeat;
	}
	.play .play-right {
		background: url('/wr/Public/images/timer-black.png') right no-repeat;
	}
</style>
<body>
	<div class="header">
		<div class="nav-wrap clear">
			<a class="logo" href=""><img src="/wr/Public/images/<?php echo ($logo); ?>"></a>
			<ul class="nav clear">
				<?php foreach($nav as $subnav) { ?>
					<li class="<?php echo ($subnav['nav-name']); ?>"><?php echo ($subnav['nav-name']); ?></li>
				<?php } ?>
			</ul>
		</div>
	</div>
	<div class="level-line"></div>


	<?php foreach($nav as $key => $title) { $point = 0; ?>
		<div <?php if($key == 0) { ?>style="padding:0;<?php }?>" class="title" id="<?php echo ($title['nav-name']); ?>" name="<?php echo ($title['nav-name']); ?>"><?php echo ($title['nav-name']); ?></div>
		<div class="banner">
			<div class="play">
				<div class="play-left">
					<div class="mask1"></div>
				</div>
				<div class="play-right">
					<div class="mask2"></div>
				</div>
			</div>
			<div class="bd">
				<ul class="banner-content">
					<?php foreach($content as $item) { if($title['id'] == $item['nav-id']) { $point++; switch($item['type']) { case 1 : ?> <li><img src="/wr/Public/images/<?php echo ($item['image']); ?>" alt=""></li><?php break; case 2 : ?> <li><div class="left-img"><img src="/wr/Public/images/<?php echo ($item['image']); ?>" alt=""></div>
												<div class="right-text"><?php echo ($item['text-right']); ?></div></li><?php break; case 3 : ?> <li><div class="left-onlytext"><?php echo ($item['text-left']); ?></div>
												<div class="right-onlytext"><?php echo ($item['text-right']); ?></div>
											</li>
					<?php break;}}}?>
				</ul>
			</div>
			<?php if($point == 1) {continue;} ?>
			<div class="hd">
				<ul class="clear banner-button">
					<?php for($i = 0; $i < $point; $i++) { ?>
						<li><?php echo ($i); ?></li>
					<?php }?>
				</ul>
			</div>
			<a class="prev" href="javascript:void(0)"></a>
			<a class="next" href="javascript:void(0)"></a>
		</div>
	<?php }?>


<!-- 	<div class="title">snapshot</div>
	<div class="banner">
		<div class="hd">
			<ul class="clear banner-button">
				<li>1</li>
				<li>2</li>
			</ul>
		</div>
		<div class="play">
			<div class="play-left">
				<div class="mask1"></div>
			</div>
			<div class="play-right">
				<div class="mask2"></div>
			</div>
		</div>
		<div class="bd">
			<ul class="banner-content">
				<li><img src="/wr/Public/images/1.jpg" alt=""></li>
				<li>
					<div class="left-img"><img src="/wr/Public/images/small.jpg" alt=""></div>
					<div class="right-text"></div>
				</li>
			</ul>
		</div>
		<a class="prev" href="javascript:void(0)"></a>
		<a class="next" href="javascript:void(0)"></a>
	</div>


	<div class="title">snapshot</div>
	<div class="banner">
		<div class="hd">
			<ul class="clear banner-button">
				<li>1</li>
				<li>2</li>
			</ul>
		</div>
		<div class="play">
			<div class="play-left">
				<div class="mask1"></div>
			</div>
			<div class="play-right">
				<div class="mask2"></div>
			</div>
		</div>
		<div class="bd">
			<ul class="banner-content">
				<li><img src="/wr/Public/images/1.jpg" alt=""></li>
				<li>
					<div class="left-onlytext"></div>
					<div class="right-onlytext"></div>
				</li>
			</ul>
		</div>
		<a class="prev" href="javascript:void(0)"></a>
		<a class="next" href="javascript:void(0)"></a>
	</div> -->

	<script>
		$('.banner').slide({"mainCell": ".bd ul", "autoPlay": false, "delayTime": 3000});

		$('.snapshot').click(function() {
			$('html, body').animate({scrollTop: $('#snapshot').offset().top - 200}, 2000);
		});

		$('.ab').click(function() {
			$('html, body').animate({scrollTop: $('#ab').offset().top}, 2000);
		});

		$('.play').click(function() {
			$(this).css({"background":"url('/wr/Public/images/pause-black.png') top no-repeat"});
			$('.play-right').animate({"transform": "rotate(180deg)"}, 1500, function() {
				$('play-left').animate({"transform": "rotate(180deg)"}, 1500);
			});
		});
	</script>
</body>
</html>