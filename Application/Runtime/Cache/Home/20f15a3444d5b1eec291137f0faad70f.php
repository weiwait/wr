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
	.play-status {
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
				<?php foreach($nav as $key => $subnav) { ?>
					<li class="anchor<?php echo ($key); ?>"><?php echo ($subnav['nav-name']); ?></li>
				<?php } ?>
			</ul>
		</div>
	</div>
	<div class="level-line"></div>


	<?php foreach($nav as $key_play => $title) { $point = 0; ?>
		<div <?php if($key_play == 0) { ?>style="padding:0;"<?php }?> class="title" id="anchor<?php echo ($key_play); ?>" name="<?php echo ($title['nav-name']); ?>"><?php echo ($title['nav-name']); ?></div>
		<div class="banner">
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

			<div class="play" data-id="off" data-index="<?php echo ($key_play); ?>">
				<div class="play-wrap">
					<div class="<?php echo ($key_play); ?>-play-left play-left"></div>
					<div class="<?php echo ($key_play); ?>-play-right play-right"></div>
					<div class="<?php echo ($key_play); ?>-play-mask play-mask"></div>
					<div class="<?php echo ($key_play); ?>-play-status play-status"></div>
					<div class="<?php echo ($key_play); ?>-play-mask2 play-mask2"></div>
				</div>
			</div>

			<a class="prev" href="javascript:void(0)"></a>
			<a data-pause="pause<?php echo ($key_play); ?>" class="next" href="javascript:void(0)"></a>
		</div>
	<?php }?>


	<script>

		$('.play').click(function() {
			var status = $(this).attr('data-id');
			var index = $(this).attr('data-index');
			if (status == 'off') {
				$(this).attr('data-id', 'on');
				$('.' + index +'-play-status').css({"background": "url('/wr/Public/images/pause-black.png') top no-repeat"});
				$('.' + index +'-play-left').css({"transition": "transform 1.5s linear", "transform": "rotate(180deg)"});
				$('.' + index +'-play-left').on('transitionend', function() {
					$('.' + index +'-play-mask').css({"visibility": "hidden"});
					$('.' + index +'-play-right').css({"opacity": 1, "transition": "transform 1.5s linear", "transform": "rotate(180deg)"});
				});
				$('.' + index +'-play-right').on('transitionend', function() {
					$('.' + index +'-play-left, .play-right').removeAttr('style');
					$('.' + index +'-play-mask').css({"visibility": "visible"});
					$("[data-pause = 'pause" + index + "']").trigger('click');
					$('.' + index +'-play-left').css({"transition": "transform 1.5s linear", "transform": "rotate(180deg)"});
				});
			}else {
				$(this).attr('data-id', 'off');
				$('.' + index +'-play-left, .' + index +'-play-right').removeAttr('style');
				$('.' + index +'-play-mask').css({"visibility": "visible"});
				$('.' + index +'-play-status').css({"background": "url('/wr/Public/images/pause-black.png') bottom no-repeat"});
			}
		});

		$('.banner').slide({"mainCell": ".bd ul", "effect": "leftLoop", "autoPlay": false, "delayTime": 1200});
		var nav = [];
		for (var i = 0; i < $('.title').length; i++) {
			nav[i] = $($('.title')[i]).offset().top;
		}

		$('.nav li').click(function() {
			var anchor = $(this).attr('class');
			$('html, body').stop(true);
			if (anchor == 'anchor0') {
				$('html, body').animate({scrollTop: $('#' + anchor).offset().top - 200}, 1000);
			}else {
				$('html, body').animate({scrollTop: $('#' + anchor).offset().top}, 1000);
			}
			$('.nav .active').removeClass('active');
			$(this).addClass('active');
		});

		$(window).scroll(function() {
			for (var i = 0; i < nav.length; i++) {
				if (nav[i] - $(window).scrollTop() < 150 & nav[i] - $(window).scrollTop() > -150 + -300 * i) {
					$('.nav .active').removeClass('active');
					$($('.nav li')[i]).addClass('active');
				}
			}
		});

		$('body').mousewheel(function() {
			$('html, body').stop(true);
		});

		$('.ab').click(function() {
			$('html, body').animate({scrollTop: $('#ab').offset().top}, 2000);
		});
	</script>
</body>
</html>