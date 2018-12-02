<?php

namespace Admin\Controller;
use Think\Controller;

header('Content-type:text/html; charset=utf-8');

class IndexController extends BaseController {
    public function index(){
    	//导航栏
        $one = array('name' => '个人中心', 'value' => U('Index/index'));
        $this->assign("one",$one);

        $admin = session('admin_info');

        $this->assign('info', $admin);
        $this->display();
    }
}