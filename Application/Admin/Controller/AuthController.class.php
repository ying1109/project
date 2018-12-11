<?php

namespace Admin\Controller;
use Think\Controller;
header('Content-type:text/html; charset=utf-8');

class AuthController extends BaseController {
    //管理员
    public function admin() {
        $one = array('name' => '权限管理', 'value' => U('Auth/admin'));
        $two = array('name' => '管理员', 'value' => U('Auth/admin'));
        $this->assign("one", $one);
        $this->assign("two", $two);

        $Admin = D('Admin');

        $list = $Admin->lists();

        $this->assign('list', $list);
        $this->display();
    }

    //管理员添加
    public function adminAddEdit() {
        $one   = array('name' => '权限管理', 'value' => U('Auth/admin'));
        $two   = array('name' => '管理员', 'value' => U('Auth/admin'));
        $three = array('name' => '管理员添加', 'value' => U('Auth/adminAddEdit'));
        $this->assign("one", $one);
        $this->assign("two", $two);
        $this->assign("three", $three);

        $Admin = D('Admin');

        $map['id'] = I('id', 0);
        $info      = $Admin->info($map);

        $this->assign('info', $info);

        if (IS_POST) {
            $data['account']    = I('account');
            $data['nickname']   = I('nickname');
            $data['phone']      = I('phone');
            $data['s_province'] = I('s_province');
            $data['s_city']     = I('s_city');
            $data['s_county']   = I('s_county');
            $data['address']    = I('address');
            $data['remark']     = I('remark');
            $data['portrait']   = trim(trim(I('post_banner'), '"'), '&quot;');;

            if (!$info) {
                $data['password_md5'] = md5(md5(I('account')) . md5(I('password')));
                $data['create_time']  = time();
                $res = $Admin->add($data);
            } else {
                $res = $Admin->update($map, $data);
            }
            if (!$res['status']) {
                $this->error('提交失败');
            } else {
                $this->success('提交成功', U('Auth/admin'));
            }
            exit;
        }

        $this->display();
    }
    
    //安全设置
    public function resetPwd() {


        $this->display();
    }
}
