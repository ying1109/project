<?php

namespace Admin\Controller;
use Think\Controller;
header('Content-type:text/html; charset=utf-8');

class PoetryController extends BaseController {
    // 诗
    public function poem() {
        $url = CONTROLLER_NAME . '/' . 'poem';
        $this->assign('url', $url);
        $one = array('name' => '诗词文句', 'value' => U('Poetry/poem'));
        if (I('type', 1) == 1) {
            $name = '诗词歌赋' . '（诗）';
        } elseif (I('type') == 2) {
            $name = '诗词歌赋' . '（词）';

        } elseif (I('type') == 3) {
            $name = '诗词歌赋' . '（歌）';

        } elseif (I('type') == 4) {
            $name = '诗词歌赋' . '（赋）';
        }
        $two = array('name' => $name, 'value' => U('Poetry/poem'));
        $this->assign("one", $one);
        $this->assign("two", $two);

        $Scgf = D('Scgf');

        $map['type']   = I('type', 1);
        $map['status'] = array('NEQ', -1);

        // 分页开始
        // 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
        $count = M('Scgf')->where($map)->count();// 查询满足要求的总记录数
        $Page  = new \Think\Page($count, 1);// 实例化分页类 传入总记录数和每页显示的记录数
        $Page->setConfig('header','<li class="disabled hwh-page-info"><a>共<em>%TOTAL_ROW%</em>条  <em>%NOW_PAGE%</em>/%TOTAL_PAGE%</a></li>');
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $Page->setConfig('last','末页');
        $Page->setConfig('first','首页');
        $Page->setConfig('theme','%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
        $show = bootstrap_page_style($Page->show());// 分页显示输出
        $this->assign('page',$show);// 赋值分页输出

        $list = $Scgf->lists($map, $Page->firstRow, $Page->listRows);

        $this->assign('type', $map['type']);
        $this->assign('list', $list);
        $this->display();
    }

    // 诗添加编辑
    public function poemAddEdit() {
        $url = CONTROLLER_NAME . '/' . 'poem';
        $this->assign('url', $url);
        $one = array('name' => '诗词文句', 'value' => U('Poetry/poem'));
        if (I('type', 1) == 1) {
            $name = '诗词歌赋' . '（诗）';
        } elseif (I('type') == 2) {
            $name = '诗词歌赋' . '（词）';

        } elseif (I('type') == 3) {
            $name = '诗词歌赋' . '（歌）';

        } elseif (I('type') == 4) {
            $name = '诗词歌赋' . '（赋）';
        }
        $two = array('name' => $name, 'value' => U('Poetry/poem'));
        $three = array('name' => '添加、编辑', 'value' => U('Poetry/poemAddEdit'));
        $this->assign("one", $one);
        $this->assign("two", $two);
        $this->assign("three", $three);

        $Scgf = D('Scgf');

        $map['id']     = I('id', 0);
        $info          = $Scgf->info($map);
        $this->assign('info', $info);
        $this->assign('type', I('type'));

        if (IS_POST) {
            $data['name']       = trim(I('name'), '');
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
        $one = array('name' => '诗词文句', 'value' => U('Poetry/poem'));
        if (I('type', 1) == 1) {
            $name = '诗词歌赋' . '（诗）';
        } elseif (I('type') == 2) {
            $name = '诗词歌赋' . '（词）';

        } elseif (I('type') == 3) {
            $name = '诗词歌赋' . '（歌）';

        } elseif (I('type') == 4) {
            $name = '诗词歌赋' . '（赋）';
        }
        $two = array('name' => $name, 'value' => U('Poetry/poem'));
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