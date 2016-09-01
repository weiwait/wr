<?php

namespace Admin\Controller;

use Think\Controller;

class IndexController extends Controller
{
    public function index()
    {
        if (!session('?user_id')) {
            header("location:" . U('Admin/Index/login'));
            return;
        }
        $this->display();
    }

    public function login() {
        if (!IS_POST) {
            $this->display();
            return;
        }
        $username = trim(I('post.username'));
        $password = md5(trim(I('post.password')));
        if (!empty($username) & !empty($password)) {
            $res = M('AdminUser')->select();
            foreach ($res as $value) {
                if ($username == $value['username'] and $password == $value['password']) {
                    // session('user.username', $username);
                    // session('user.password', $password);
                    $id = $value['id'];
                    session('user_id', $id);
                    echo 1;
                    break;
                }
            }
        }
    }

    public function getVerify() {
        $verify = new \Think\Verify();
        $verify->fontSize = 60;
        $verify->length = 4;
        $verify->codeSet = '15692073';
        $verify->useCurve = false;
        $verify->entry();
    }

    public function verifyCompare($id = '') {
        $code = $_POST['verify'];
        $verify = new \Think\Verify();
        echo $verify->check($code, $id);
    }
    public function quit() {
        session('user_id', null);
        echo 1;
    }
}
