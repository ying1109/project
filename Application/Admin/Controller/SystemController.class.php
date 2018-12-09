<?php
namespace Admin\Controller;
use Think\Controller;

header('content-type:text/html; charset=utf-8');
class SystemController extends BaseController {
    //关于我们
    public function aboutUs(){
    	$one = array('name'=>'系统设置','value'=>U('System/aboutUs'));
    	$two = array('name'=>'关于我们','value'=>U('System/aboutUs'));
    	$this->assign("one",$one);
    	$this->assign("two",$two);

        $AboutUs = D('AboutUs');

        $map['id'] = 1;
        $info      = $AboutUs->info($map);
        $this->assign('info', $info);

        if (IS_POST) {
            $data['detail']      = $_POST['detail'];
            $data['create_time'] = time();
            if (!$info) {
                $res = $AboutUs->add($data);
            } else {
                $res = $AboutUs->update($map, $data);
            }

            if ($res['status'] == 1) {
                $this->redirect('System/aboutUs');
            }
        }

        $this->display();
    }
    
    //轮播图
    public function banner() {
        $one = array('name'=>'系统设置','value'=>U('System/banner'));
        $two = array('name'=>'轮播图管理','value'=>U('System/banner'));
        $this->assign("one",$one);
        $this->assign("two",$two);

        $Banner = D('Banner');

        $map['id'] = 1;
        $info      = $Banner->info($map);
        $banner    = json_decode($info['banner'], true);

        $this->assign('list', $banner);

        $this->display();
    }
    
    //轮播图添加编辑
    public function bannerAddEdit() {
        $one   = array('name' => '系统设置', 'value' => U('System/banner'));
        $two   = array('name' => '轮播图管理', 'value' => U('System/banner'));
        $three = array('name' => '添加', 'value'=>U('System/bannerAdd'));
        $this->assign("one",$one);
        $this->assign("two",$two);
        $this->assign("three",$three);

        $Banner = D('Banner');

        $map['id'] = 1;
        $info      = $Banner->info($map);
        $banner    = json_decode($info['banner'], true);

        $this->assign('list', $banner);

        if (IS_POST) {
            if (empty($_POST['post_banner'])) {
                $this->error("请上传至少一张轮播图");
            }

            $banner_list = array();
            foreach ($_POST['post_banner'] as $k => $v) {
                $banner_list[$k]['pic']       = json_decode($v, true);
                $banner_list[$k]['link_url']  = $_POST['link_url'][$k] ? $_POST['link_url'][$k] : '';
                $banner_list[$k]['link_info'] = $_POST['link_info'][$k] ? $_POST['link_info'][$k] : '';
            }
            $data['banner']      = json_encode($banner_list);
            $data['update_time'] = time();
            if ($banner) {
                $res = $Banner->update($map, $data);
            } else {
                $data['create_time'] = time();
                $res = $Banner->add($data);
            }
            
            if ($res['status']) {
                $this->success('提交成功', U('System/banner'));
            } else {
                $this->error('提交失败');
            }
            exit;
        }

        $this->display();
    }

}