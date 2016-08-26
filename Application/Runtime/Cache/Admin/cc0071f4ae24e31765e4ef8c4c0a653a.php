<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<style>
    table {
        border: 1px solid #a7a7a7;
        margin: 50px 0 0 0;
    }
    td {
        border: 1px solid #a7a7a7;
        width: 88px;
        height: 30px;
        text-align: center;
    }
    .form {
        position: relative;
    }
    .popup-true, .popup-false {
        width: 168px;
        height: 148px;
        background: #a7a7a7;
        position: absolute;
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
    input {
        width: 188px;
        height: 26px;
        margin: 10px 0 0 20px;
    }
</style>
<body>
    <div class="form">
        <form action="" method="post" id="sub" onsubmit="return sub()"></form>
            <div>栏位名称:<input type="text" name="nav"></div>
            <div>排　　序:<input type="text" name="sort"></div>
            <div><input type="submit"　></div>
        </form>
        <div class="popup-true">添加成功</div>
        <div class="popup-false">添加失败</div>
    </div>
    <div>
        <table>
            <tr>
                <td>当前排序</td>
                <?php foreach($nav as $column) { ?>
                <td><?php echo ($column['sort']); ?></td>
                <?php }?>
            </tr>
            <tr>
                <td>当前栏目</td>
                <?php foreach($nav as $column) { ?>
                <td><?php echo ($column['nav-name']); ?></td>
                <?php }?>
            </tr>
        </table>
    </div>
    <script type="text/javascript" src="/wr/Public/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="/wr/Public/js/ajaxForm.js"></script>
    <script type="text/javascript">
        function sub() {
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
    </script>
</body>
</html>