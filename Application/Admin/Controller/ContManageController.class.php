<?php

namespace Admin\Controller;

use Think\Controller;

use Org\Util;

class ContManageController extends Controller
{
    public function column()
    {
        $nav = M('Nav');
        $nav = $nav->order('sort asc')->select();
        $content = M('Content')->order('sort asc')->select();
        $this->assign('nav', $nav);
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

    private function upload()
    {
        $up = new \Org\Util\FileUpload;
        $path = "./Public/images/";
        $up -> set("path", $path);
        $up -> set("maxsize", 2000000);
        $up -> set("allowtype", array("gif", "png", "jpg","jpeg"));
        $up -> set("israndname", false);
        if ($up->upload('picture')) {
            return ($up->getFileName());
        }else {
            return false;
        }
    }

    public function contRevise() {
        $type = I('post.type');
        $id = I('post.id');
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
                $img = self::upload();
                if ($img != false) {
                    $data['image'] = $img;
                }
                $data['text-right'] = I('post.right');
                break;
            default:
                echo 0;
                break;
        }
        echo M('Content')->where("id=$id")->save($data);
    }

    public function contDelete() {
        $id = I('post.id');
        echo M('Content')->where("id=$id")->delete();
    }
}
