<?php

namespace Admin\Controller;

use Think\Controller;

class IframeController extends Controller
{
    public function index() {
        $mysql_version = M()->query('select VERSION() as version');
        $mysql_version = $mysql_version[0]['version'];
        $mysql_version = empty($mysql_version)? 'UNKNOW': $mysql_version;
        $php_system = PHP_OS;
        $operation_environment = $_SERVER['SERVER_SOFTWARE'];
        $php_operation_way = php_sapi_name();
        $accessory_limit = ini_get('upload_max_filesize');
        $surplus_space = round(disk_free_space('/') / (1024 * 1024), 2) . 'M';

        $server_info = array(
            'surplus_space' => $surplus_space,
            'accessory_limit' => $accessory_limit,
            'program_version' => '1.0',
            'mysql_version' => $mysql_version,
            'php_operation_way' => $php_operation_way,
            'operation_environment' => $operation_environment,
            'php_system' => $php_system,
        );

        $this->assign('server_info', $server_info);
        $this->display();
    }
}
