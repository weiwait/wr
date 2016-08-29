<?php

namespace Admin\Controller;

use Think\Controller;

class ContManageController extends Controller
{
    public function column()
    {
        $nav = M('Nav');
        $nav = $nav->order('sort asc')->select();
        $this->assign('nav', $nav);
        $content = M('Content')->order('sort asc')->select();
        $this->assign('content', $content);
        $this->display();
    }

    public function navRevise()
    {
        for ($i=0; $i < count(I('post.id')); $i++) {
            $id = I('post.id')[$i];
            $data['sort'] = I('post.sort')[$i];
            $data['nav-name'] = I('post.name')[$i];
            if (empty($data['nav-name'])) {
                M('Nav')->where("id=$id")->delete();
                echo M('Content')->where("nav-id=$id")->delete();
                continue;
            }
            echo M('Nav')->where("id=$id")->save($data);
        }
    }
}
