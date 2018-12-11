<?php

namespace Admin\Controller;
use Think\Controller;
header('Content-type:text/html; charset=utf-8');

class PoetryController extends BaseController {
    // 诗
    public function poem() {
        $url = CONTROLLER_NAME . '/' . 'poem';
        $this->assign('url', $url);
        $one = array('name' => '诗词歌赋', 'value' => U('Poetry/poem'));
        $two = array('name' => '诗', 'value' => U('Poetry/poem'));
        $this->assign("one", $one);
        $this->assign("two", $two);

        $Scgf = D('Scgf');

        $map['type']   = I('type', 1);
        $map['status'] = array('NEQ', -1);
        $list = $Scgf->lists($map);

        $this->assign('type', $map['type']);
        $this->assign('list', $list);
        $this->display();
    }

    // 诗添加编辑
    public function poemAddEdit() {
        $url = CONTROLLER_NAME . '/' . 'poem';
        $this->assign('url', $url);
        $one   = array('name' => '诗词歌赋', 'value' => U('Poetry/poem'));
        $two   = array('name' => '诗', 'value' => U('Poetry/poem'));
        $three = array('name' => '添加、编辑', 'value' => U('Poetry/poemAddEdit'));
        $this->assign("one", $one);
        $this->assign("two", $two);
        $this->assign("three", $three);

        $Scgf = D('Scgf');

        $map['id']     = I('id', 0);
        $info          = $Scgf->info($map);

        $this->assign('info', $info);

        if (IS_POST) {
            $data['name']    = trim(I('name'), '');
            $data['author']  = trim(I('author'), '');
            $data['dynasty'] = trim(I('dynasty'), '');
            $data['content'] = trim(I('content'), '');
            $data['detail']  = trim(I('detail'), '');
            $data['type']    = I('type');
            $data['update_time']  = time();

            if (!$info) {
                $data['create_time']  = time();
                $res = $Scgf->add($data);
            } else {
                $res = $Scgf->update($map, $data);
            }
            if (!$res['status']) {
                $this->error('提交失败');
            } else {
                $this->success('提交成功', U('Poetry/poem'));
            }
            exit;
        }

        $this->display();
    }
    
    // 诗详情
    public function poemDetail() {
        $url = CONTROLLER_NAME . '/' . 'poem';
        $this->assign('url', $url);
        $one   = array('name' => '诗词歌赋', 'value' => U('Poetry/poem'));
        $two   = array('name' => '诗', 'value' => U('Poetry/poem'));
        $three = array('name' => '详情', 'value' => U('Poetry/poemDetail'));
        $this->assign("one", $one);
        $this->assign("two", $two);
        $this->assign("three", $three);

        $Scgf = D('Scgf');

        $map['id']     = I('id', 0);
        $info          = $Scgf->info($map);

        $this->assign('info', $info);
        $this->display();
    }


}