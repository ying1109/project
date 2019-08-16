<?php

namespace Admin\Controller;
use Think\Controller;

header('Content-type:text/html; charset=utf-8');

class BaseController extends Controller {
    public function _initialize(){
        //判断是否登录
        // $admin_id = $_COOKIE["id"];
        // if(!$admin_id){
        //     $this->error('您尚未登陆，正在跳转至登陆页面', U('Login/login'));
        // }
        //
        // $admin_info = D('Admin')->info(array('id'=>$admin_id));
        // $this->assign('admin', $admin_info);
    }
}