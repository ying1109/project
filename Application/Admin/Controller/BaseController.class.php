<?php

namespace Admin\Controller;
use Think\Controller;

header('Content-type:text/html; charset=utf-8');

class BaseController extends Controller {
    public function _initialize(){
        //判断是否登录
        $admin_id = $_COOKIE["id"];
        if(!$admin_id){
            $this->redirect('Login/login');
        }

        $admin_info = session('admin_info');
        $this->assign('admin', $admin_info);
    }
}