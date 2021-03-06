<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<style>
    form div {
        display: none;
    }
    .ke-container {
        width: 500px;
    }
    .type h4 {
        display: inline-block;
        width: 100px;
        text-align: center;
        cursor: pointer;
        color: #a7a7a7;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        -o-user-select: none;
        user-select: none;
    }
    .popup-true, .popup-false {
    width: 168px;
    height: 148px;
    background: pink;
    position: relative;
    top: -38%;
    left: 32%;
    font-size: 28px;
    text-align: center;
    line-height: 148px;
    display: none;
    }
    .popup-false {
        top: -70%;
    }
</style>
<body>
    <div class="type">
        <h4>请选择类型：</h4>
        <h4 class="img">图片</h4>
        <h4 class="text">文字</h4>
        <h4 class="tai">图片与文字</h4>
    </div>
    <div class="form">
        <form action="" method="post" enctype="multipart/form-data" id="sub" onsubmit="return sub();">
            <div class="label">
                所属栏位：
                <?php foreach($column as $radios) { ?>
                    <label><input type="radio" name="column" value="<?php echo ($radios['id']); ?>"><?php echo ($radios['nav-name']); ?></label>
                <?php } ?>
            </div>
            <div><input type="hidden" name="MAX_FILE_SIZE" value="10000000"></div>
            <div><input class="request-type" type="hidden" name="type" value=""></div>
            <div class="img tai"><input class="pic" type="file" name="picture"></div>
            <div id="t1" class="text"><textarea name="left" id="editor" style="width:500px;"></textarea></div>
            <div id="t2" class="text tai"><textarea name="right" id="editor2" style="width:500px;"></textarea></div>
            <div class="submit"><input type="submit"></div>
        </form>
        <div class="popup-true">添加成功</div>
        <div class="popup-false">添加失败</div>
    </div>
    <script charset="utf-8" src="/wr/Public/kindeditor/kindeditor.js"></script>
    <script charset="utf-8" src="/wr/Public/kindeditor/lang/zh_CN.js"></script>
    <script type="text/javascript" src="/wr/Public/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="/wr/Public/js/ajaxForm.js"></script>
    <script>
        function sub() {
            textval();
            $('#sub').ajaxSubmit(function(m) {
                if(m >= 1) {
                    $('.popup-true').fadeIn(1200, function() {
                        $(this).slideUp(800,function() {
                            window.location.reload();
                        });
                    });
                }else {
                    $('.popup-false').slideDown(1200, function() {
                        $(this).fadeOut(800, function() {
                            window.location.reload();
                        });
                    });
                }
            });
            return false;
        }

        function textval() {
            var leftval = $('#t1 .ke-edit-iframe').contents().find('.ke-content').html();
            var rightval = $('#t2 .ke-edit-iframe').contents().find('.ke-content').html();
            $('#t1 textarea').html(leftval);
            $('#t2 textarea').html(rightval);
        }

        KindEditor.options.filterMode = false;
        KindEditor.ready(function(K) {
                window.editor = K.create('#editor, #editor2');
        });

        $('.type .img').click(function() {
            $('form div').css({"display": "none"});
            $('form .img, .submit, .label').css({"display": "block"});
            $('.request-type').attr('value', 1)
        });
        $('.type .text').click(function() {
            $('form div').css({"display": "none"});
            $('form .text, form .text div, .submit, .label').css({"display": "block"});
            $('.request-type').attr('value', 3)
        });
        $('.type .tai').click(function() {
            $('form div').css({"display": "none"});
            $('form .tai, .tai div, .submit, .label').css({"display": "block"});
            $('.request-type').attr('value', 2);
        });
    </script>
</body>
</html>