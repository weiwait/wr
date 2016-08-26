<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $nav = M('Nav');
        $content = M('Content');
        $content = $content->select();
        $nav = $nav->order('sort asc')->select();
    	$logo = 'wright-design.png';
        $this->assign('nav', $nav);
    	$this->assign('logo', $logo);
        $this->assign('content', $content);
    	$this->assign('title', 'weiwait');
        $this->display();
    }
}