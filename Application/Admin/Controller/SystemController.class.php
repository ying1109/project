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

        $this->display();
    }
    
    //轮播图添加
    public function bannerAdd() {
        $Banner = D('Banner');

        $map['id'] = 1;
        $info      = $Banner->info($map);
        $banner    = json_decode($info['banner'], true);

        $this->assign('info', $banner);

        if (IS_POST) {
            if (empty($_POST['post_banner'])) {
                $this->error("请上传至少一张轮播图");
            }

            $banner_list = array();
            echo "<pre>";
            var_dump($_POST);
            die;
            /*foreach ($_POST['post_banner'] as $k => $v) {

            }*/
        }

        $this->display();
    }

}