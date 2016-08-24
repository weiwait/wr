<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$logo = 'wright-design.png';
    	$this->assign('logo', $logo);
    	$this->assign('title', 'weiwait');
        $this->display();
    }
}