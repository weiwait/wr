<?php

namespace Admin\Controller;

use Think\Controller;

class AddColumnController extends Controller
{
    public function addColumn()
    {
        if(!IS_POST) {
            $nav = M('Nav');
            $nav = $nav->order('sort asc')->select();
            $this->assign('nav', $nav);
            $this->display();
            return;
        }
        $data['nav-name'] = empty(I('post.nav')) ? echo 0 : I('post.nav');
        $data['sort'] = I('post.sort');
        echo M('Nav')->add($data);
    }
}
