<?php

namespace Admin\Controller;

use Think\Controller;

class UserController extends Controller
{
    public function user()
    {
        $id = session('user_id');
        $username = M('AdminUser')->field('username')->where("id=$id")->find();
        $this->assign('username', $username['username']);
        $this->display();
    }

    public function userRevise() {
        $id = session('user_id');
        $data['username'] = trim(I('post.username'));
        $data['password'] = md5(trim(I('post.password')));
        $res = M('AdminUser')->where("id=$id")->save($data);
        echo $res;
    }

    public function verify() {
        $user = M('AdminUser');
        $id = session('user_id');
        $username = $user->field('username')->where("id=$id")->find();
        $username = $username['username'];
        $password = md5(trim(I('post.verify')));
        $res = $user->where("username='{$username}' AND password='{$password}'")->select();
        if (count($res) != 0) {
            echo 1;
        }
    }
}
