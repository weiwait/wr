<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link rel="stylesheet" href="/wr/Public/css/admin.css">
    <script src="/wr/Public/js/jquery-1.9.1.min.js"></script>
    <script src="/wr/Public/js/jquery.SuperSlide.2.1.1.js"></script>
</head>
<body>
    <div class="header"></div>
    <div class="body clear">
        <div class="left"></div>
        <div class="right"></div>
    </div>
    <script>
        $('.body').css({"height": window.innerHeight});

        $(window).resize(function() {
            window.history.go(0)
        });
    </script>
</body>
</html>