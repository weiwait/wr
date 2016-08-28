<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge,chrome=1">
	<meta name="viewport" content="width=device-width,inital-scale=1">
	<title><?php echo ($title); ?></title>
	<link rel="stylesheet" type="text/css" href="/wr/Public/css/style.css">
	<script src="/wr/Public/js/jquery-1.9.1.min.js"></script>
	<script src="/wr/Public/js/jquery.SuperSlide.2.1.1.js"></script>
	<script src="/wr/Public/js/jquery.mousewheel.js"></script>
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
/*	.play .play-left {
		background: url('/wr/Public/images/rotator-black.png') left no-repeat;
	}
	.play .play-right {
		background: url('/wr/Public/images/timer-black.png') right no-repeat;
	}*/
</style>
<body>
	<div class="header">
		<div class="nav-wrap clear">
			<a class="logo" href=""><img src="/wr/Public/images/<?php echo ($logo); ?>"></a>
			<ul class="nav clear">
				<?php foreach($nav as $key => $subnav) { ?>
					<li class="anchor<?php echo ($key); ?>"><?php echo ($subnav['nav-name']); ?></li>
				<?php } ?>
			</ul>
		</div>
	</div>
	<div class="level-line"></div>


	<?php foreach($nav as $key => $title) { $point = 0; ?>
		<div <?php if($key == 0) { ?>style="padding:0;"<?php }?> class="title" id="anchor<?php echo ($key); ?>" name="<?php echo ($title['nav-name']); ?>"><?php echo ($title['nav-name']); ?></div>
		<div class="banner">
			<div class="play" id="off"></div>
			<div class="bd">
				<ul class="banner-content">
					<?php foreach($content as $item) { if($title['id'] == $item['nav-id']) { $point++; switch($item['type']) { case 1 : ?> <li><img src="/wr/Public/images/<?php echo ($item['image']); ?>" alt=""></li><?php break; case 2 : ?> <li>
												<div class="left-img"><img src="/wr/Public/images/<?php echo ($item['image']); ?>" alt=""></div>
												<div class="right-text"><?php echo html_entity_decode($item['text-right']); ?></div>
											</li><?php break; case 3 : ?> <li>
												<div class="left-onlytext"><?php echo html_entity_decode($item['text-left']); ?></div>
												<div class="right-onlytext"><?php echo html_entity_decode($item['text-right']); ?></div>
											</li>
					<?php break;}}}?>
				</ul>
			</div>
			<div class="hd">
			<?php if($point <= 1) {?>
				</div></div>
			<?php continue;}?>
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


	<script>
		$('.banner').slide({"mainCell": ".bd ul", "effect": "leftLoop", "autoPlay": false, "delayTime": 1200});

		$('.nav li').click(function() {
			var anchor = $(this).attr('class');
			$('html, body').stop(true);
			if (anchor == 'anchor0') {
				$('html, body').animate({scrollTop: $('#' + anchor).offset().top - 200}, 1000);
			}else {
				$('html, body').animate({scrollTop: $('#' + anchor).offset().top}, 1000);
			}
		});

		$('body').mousewheel(function() {
			$('html, body').stop(true);
		});

		$('.ab').click(function() {
			$('html, body').animate({scrollTop: $('#ab').offset().top}, 2000);
		});

		$('.play').click(function() {
			var status = $(this).attr('id');
			if (status == 'off') {
				$(this).css({"background":"url('/wr/Public/images/pause-black.png') top no-repeat"});
				$(this).parent().slide({"mainCell": ".bd ul", "effect": "left", "autoPlay": true, "delayTime": 1200});
				$(this).attr('id', 'on');
			}else {
				$(this).css({"background":"url('/wr/Public/images/pause-black.png') bottom no-repeat"});
				$(this).parent().slide({"mainCell": ".bd ul", "effect": "left", "autoPlay": false, "delayTime": 1200});
				$(this).attr('id', 'off');
			}
		});
	</script>
</body>
</html>