<?php

namespace Admin\Controller;
use Think\Controller;
header('Content-type:text/html; charset=utf-8');

class AjaxController extends BaseController {
    // 重置密码
    public function resetPwd() {
        $Admin = D('Admin');

        $map['id']  = $_COOKIE['id'];
        $info_admin = $Admin->info($map);

        $pwd  = I('pwd');
        $pwd1 = I('pwd1');
        $pwd2 = I('pwd2');
        if ($pwd == '' || $pwd1 == '' || $pwd2 == '') {
            $this->ajaxReturn(array('res'=>0, 'msg'=>'密码不能为空！'));
        } else {
            if (md5($pwd) != $info_admin['password_md5']) {
                $this->ajaxReturn(array('res'=>0, 'msg'=>'原密码不正确，请重新输入！'));
            }

            if ($pwd1 != $pwd2) {
                $this->ajaxReturn(array('res'=>0, 'msg'=>'两次输入密码不一致，请重新输入！'));
            }
        }

        $data['password_md5'] = md5($pwd1);

        $res = $Admin->update($map, $data);
        if ($res['status']) {
            $this->ajaxReturn(array('res'=>1, 'msg'=>'提交成功！'));
        } else {
            $this->ajaxReturn(array('res'=>0, 'msg'=>'提交失败！'));
        }
    }
    
    // 诗删除
    public function poemDel() {
        $Scgf = D('Scgf');

        $map['id']      = I('id');
        $data['status'] = -1;

        $res = $Scgf->update($map, $data);
        if (!$res['status']) {
            $this->ajaxReturn(array('res'=>0, 'msg'=>'删除失败！'));
        } else {
            $this->ajaxReturn(array('res'=>1, 'msg'=>'删除成功！'));
        }
    }
    

}