<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        * {
            padding: 0;
            margin: 0;
        }
        li {
            list-style: none;
        }
        .revise-wrap {
            width: 260px;
            height: 260px;
            border-radius: 30px;
            position: fixed;
            top: 50%;
            left: 50%;
            margin: -130px 0 0 -130px;
            background: #abcdef;
        }
        input {
            text-indent: 4px;
            width: 200px;
            height: 30px;
            border: none;
            border-radius: 4px;
            margin: 0 0 3.5px 0;
        }
        ul {
            width: 200px;
            height: 200px;
            margin: 30px auto;
        }
        h4 {
            margin: 5px 0 0 0;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="revise-wrap">
        <h4>修改登录信息</h4>
        <form action="<?php echo U('Admin/User/userRevise');?>" method="post" id="revise" onsubmit="return revise();">
            <ul>
                <li><input type="text" name="username" value="<?php echo ($username); ?>" placeholder="input your new username"></li>
                <li><input autocomplete="off" class="newpwd" type="text" name="password" placeholder="input your new password"></li>
                <li><input id="verify" type="text" name="verify" placeholder="input your old password"></li>
                <li><input class="submit" type="submit" value="submit"></li>
            </ul>
        </form>
    </div>
    <script type="text/javascript" src="/wr/Public/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="/wr/Public/js/ajaxForm.js"></script>
    <script>
        function revise() {
            var val = $('#verify').val();
            $.post("<?php echo U('Admin/User/verify') ?>", {'verify': val}, function(data) {
                if (data == 1) {
                    $('#revise').ajaxSubmit(function(m) {
                        if (m >= 1) {
                            alert('revise success!');
                            window.location.reload(true);
                        }else {
                            alert('username or password error!');
                        }
                    });
                }else {
                    alert('verify error, input again please!');
                    $('#verify').val('');
                }
            });
            return false;
        }
        $('input').focus(function() {
            $('.newpwd').attr('type', 'password');
        });
    </script>
</body>
</html>