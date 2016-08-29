<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<style>
    .nav-revise td {
        text-align: center;
    }
    th {
        text-align: center;
    }
    .popup-true, .popup-false {
        width: 168px;
        height: 148px;
        background: pink;
        position: absolute;
        top: 38%;
        left: 38%;
        font-size: 28px;
        text-align: center;
        line-height: 148px;
        display: none;
    }
    .cont-item {
        height: 104px;
    }
    .img-item {
        height: 104px;
        width: 168px;
        float: left;
        border: 1px solid #a7a7a7;
    }
    .form-item {
        float: left;
        width: 80px;
        height: 104px;
        border: 1px solid #a7a7a7;
    }
    .action-item {
        float: left;
        width: 80px;
        height: 104px;
        border: 1px solid #a7a7a7;
    }
</style>
<body>
    <div class="nav-revise">
        <div class="popup-true">修改成功</div>
        <div class="popup-false">修改失败</div>
        <table>
            <tbody>
                <form id ="sub" action="<?php echo U('Admin/ContManage/navRevise');?>" method="post" onsubmit="return sub();">
                    <tr><th colspan="<?php echo count($nav)+2;?>">栏位修改</th></tr>
                    <tr>
                        <td>排序</td>
                        <?php foreach($nav as $column) { ?>
                            <td><input type="text" name="sort[]" value="<?php echo ($column['sort']); ?>"></td>
                        <?php } ?>
                        <td rowspan="2" style="border: 1px solid #aaa; background: #a7a7a7;border-radius: 8px; cursor: pointer;">
                            <input data-form-id="sub" type="submit" value="修改">
                        </td>
                    </tr>
                    <tr>
                        <td>名称</td>
                        <?php foreach($nav as $column) { ?>
                            <td><input type="text" name="name[]" value="<?php echo ($column['nav-name']); ?>"></td>
                        <?php } ?>
                        <td></td>
                    </tr>
                    <tr style="display: none;">
                        <td>id</td>
                        <?php foreach($nav as $column) { ?>
                            <td><input type="hidden" name="id[]" value="<?php echo ($column['id']); ?>"></td>
                        <?php } ?>
                        <td></td>
                    </tr>
                </form>
            </tbody>
        </table>
    </div>
    <div class="cont-revise">
        <div class="column-title">
            <ul>
                <?php foreach($nav as $cn) {?>
                    <li>{$cn['nav-name']}</li>
                <?php }?>
            </ul>
        </div>
        <?php foreach($content as $item) {?>
        <div class="cont-item">
            <div class="img-item">
                <img src="/wr/Public/images/{$item['image']}" alt="">
            </div>
            <div class="form-item">
                
            </div>
            <div class="action-item">
                
            </div>
        </div>
        <?php }?>
    </div>
    <script type="text/javascript" src="/wr/Public/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="/wr/Public/js/ajaxForm.js"></script>
    <script>
        var form = '';
        $("[data-form-id]").click(function() {
            form = $(this).attr('data-form-id');
        });

        function sub() {
            $('#' + form).ajaxSubmit(function(m) {
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