<?php

namespace Admin\Controller;

use Think\Controller;

use Org\Util;

class AddContentController extends Controller
{
    public function addContent()
    {
        if (!IS_POST) {
            $column = M('Nav')->select();
            $this->assign('column', $column);
            $this->display();
            return;
        }
        $type = I('post.type');
        switch ($type) {
            case 1:
                $data['image'] = self::upload();
                if ($data['image'] == false) {
                    echo 0;
                    return;
                }
                break;
            case 3:
                $data['text-left'] = I('post.left');
                $data['text-right'] =I('post.right');
                break;
            case 2:
                $data['image'] = self::upload();
                if ($data['image'] == false) {
                    echo 0;
                    return;
                }
                $data['text-right'] = I('post.right');
                break;
            default:
                echo 0;
                break;
        }
        $data['type'] = $type;
        $data['nav-id'] = I('post.column');
        echo M('Content')->add($data);
    }

    private function upload()
    {
        $up = new \Org\Util\FileUpload;
        $path = "./Public/images/";
        $up -> set("path", $path);
        $up -> set("maxsize", 10000000);
        $up -> set("allowtype", array("gif", "png", "jpg","jpeg"));
        $up -> set("israndname", false);
        if ($up->upload('picture')) {
            return ($up->getFileName());
        }else {
            return false;
        }
    }
}
