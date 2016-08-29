<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X_UA_Compatible" content="IE-edge,chrome=1">
    <meta name="viewport" content="width=device-width,inital-scale=1">
    <title>Admin</title>
    <link rel="stylesheet" href="/wr/Public/css/admin.css">
    <script src="/wr/Public/js/jquery-1.9.1.min.js"></script>
    <script src="/wr/Public/js/jquery.SuperSlide.2.1.1.js"></script>
</head>
<body>
    <div class="header">
        <h3>后台管理</h3>
        <div class="header-nav"></div>
    </div>
    <div class="body clear">
        <div class="left">
            <h4 data-url="<?php echo U('Admin/User/user');?>" data-iframe="001">管理员</h4>
            <h4 data-url="<?php echo U('Admin/AddColumn/addColumn');?>" data-iframe="002">添加栏位</h4>
            <h4 data-url="<?php echo U('Admin/AddContent/addContent');?>" data-iframe="003">添加内容</h4>
            <h4 data-url="<?php echo U('Admin/ContManage/column');?>" data-iframe="004">栏位管理</h4>
        </div>
        <div class="right">
            <iframe class="on" src="<?php echo U('Admin/Iframe/index');?>" frameborder="0"></iframe>
        </div>
    </div>
    <script>
        function init() {
            $('.body').css({"height": window.innerHeight - 88});
            $('.right').css({"width": window.innerWidth - 202});
            $('iframe').css({"height": $('.body').height() - 20});
        }

        $(function() {
            init();
        });

        $(window).resize(function() {
            init();
        });

        $('.left h4').click(function() {
            var me = $(this);
            openIframe(me);
        });

        function openIframe(me)
        {
            var c = me.attr('class');
            var preg = new RegExp(/active+/);
            if(preg.test(c)) {
                return;
            }
            preg = new RegExp(/(\bopen\b)/);
            var open = preg.test(c);
            if(open) {
                $('.on').css({"display": "none"}).removeClass('on');
                $('.active').removeClass('active');
                me.addClass('active');
                $('#' + me.attr('data-iframe')).addClass('on').css({"display": "block"});
            }else {
                var src = me.attr('data-url');
                var iframe = me.attr('data-iframe');
                $('.active').removeClass('active');
                me.addClass('open active');
                $('.on').css({"display": "none"}).removeClass('on');
                $('.right').append("<iframe id="+ iframe +" class='open on' src="+ src +" frameborder='0'></iframe>");
                $('iframe').css({"height": $('.body').height() - 20});
                // $('.header-nav').append(me.clone()).append("<div class='shutdown'>x</div>");
                // $('.header-nav h4').click(function() {
                //     var me = $(this);
                //     openIframe(me);
                // });
                // $('.shutdown').click(function() {
                //     var me = $(this);
                //     shutdown(me);
                // });
            }
        }

        function shutdown(me)
        {
            var obj = me.prev();
            var index = obj.attr('data-iframe');
            me.remove();
            obj.remove();
            $('#' + index).remove();
            $.each($(".left h4"), function(key, value) {
                if($(value).attr('data-iframe') == index) {
                    $(value).removeClass();
                }
            });
            $($("header-nav h4")[0]).trigger('click');
        }
    </script>
</body>
</html>