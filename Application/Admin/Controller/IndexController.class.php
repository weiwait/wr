<?php

namespace Admin\Controller;

use Think\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $id = $_SESSION['user_id']? $_SESSION['user_id']: '';
        if ('' == $id) {
            header("location:" . U('Admin/Index/login'));
            return;
        }
        $this->display();
    }

    public function login() {
        if (!IS_POST) {
            echo md5('sunsyi123');
            $this->display();
            return;
        }
        $username = trim(I('post.username'));
        $password = trim(md5(I('post.password')));
        if (!empty($username) & !empty($password)) {
            $res = M('AdminUser')->select();        
            foreach ($res as $value) {
                if ($username == $value['username'] and $password == $value['password']) {
                    // session('user.username', $username);
                    // session('user.password', $password);
                    $id = $value['id'];
                    session('user_id', $id);
                }
            }
        }

    }
}
