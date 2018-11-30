<?php

namespace Admin\Controller;
use Think\Controller;

header('Content-type:text/html; charset=utf-8');

class LoginController extends Controller {
    public function login(){
        session('[start]');
        $this->display();
    }

    public function ajax_login(){
        $account    = $_POST['account'] ? $_POST['account'] : '';
        $password   = $_POST['password'] ? $_POST['password'] : '';
        $code_input = $_POST['code_input'] ? $_POST['code_input'] : '';
        $code_admin = $_POST['code_admin'] ? $_POST['code_admin'] : '';
        if( $account == '' || $password == '' || $code_input == ''){
            $this->ajaxReturn(array('res'=>0,'msg'=>'账号、密码、验证码不能为空！'));
        }else{
            if ($code_input == $code_admin) {
                $info = M('Admin')->where(array('username'=>$account,'password'=>$password))->find();
                if( !$info ){
                    $this->ajaxReturn(array('res'=>0,'msg'=>'账号或密码错误'));
                }else{
                    //确认登录信息：保存cookie/session
                    cookie('admin_id',$info['admin_id']);
                    session('admin_info',$info);

                    $this->ajaxReturn(array('res'=>1,'info'=>$info));
                }
            } else {
                $this->ajaxReturn(array('res'=>0,'msg'=>'验证码错误！'));
            }
        }
    }

    //退出登录
    public function loginOut(){
        $map['admin_id'] = $_COOKIE['admin_id'];

        $info = M('Admin')->where($map)->find();

        $data['last_login_time'] = $info['last_login_time'];
        $data['last_login_ip']   = $info['last_login_ip'];
        $data['this_login_time'] = 0;
        $data['this_login_ip']   = 0;

        M('Admin')->where($map)->save($data);

        cookie('admin_id', null);
        session('admin_info', null);
        session('[destroy]');
        $this->redirect('Login/login');
    }
}