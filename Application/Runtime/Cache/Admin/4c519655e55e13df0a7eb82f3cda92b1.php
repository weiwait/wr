<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>iframe</title>
    <link rel="stylesheet" href="/wr/Public/css/iframe-iframe.css">
</head>
<body>
    <h3>系統信息</h3>
    <ul class="server_info_left">
        <li>操作系統</li>
        <li>运行环境</li>
        <li>PHP运行方式</li>
        <li>MYSQL版本</li>
        <li>程序版本</li>
        <li>附件限制</li>
        <li>剩余空间</li>
    </ul>
    <ul class="server_info_right">
        <li><?php echo ($server_info["php_system"]); ?></li>
        <li><?php echo ($server_info["operation_environment"]); ?></li>
        <li><?php echo ($server_info["php_operation_way"]); ?></li>
        <li><?php echo ($server_info["mysql_version"]); ?></li>
        <li><?php echo ($server_info["program_version"]); ?></li>
        <li><?php echo ($server_info["accessory_limit"]); ?></li>
        <li><?php echo ($server_info["surplus_space"]); ?></li>
    </ul>
    <h3>开发团队</h3>
    <ul class="server_info_left">
        <li>开发成员</li>
        <li>联系邮箱</li>
    </ul>
    <ul class="server_info_right">
        <li>weiwait</li>
        <li>lijingwei.weiwait@foxmail.com</li>
    </ul>
</body>
</html>