<?php
namespace Admin\Controller;
use Think\Controller;
class SystemController extends BaseController {
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
}