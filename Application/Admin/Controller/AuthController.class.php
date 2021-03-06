<?php

namespace Admin\Controller;
use Think\Controller;
header('Content-type:text/html; charset=utf-8');

class AuthController extends BaseController {
    //管理员
    public function admin() {
        $url = CONTROLLER_NAME . '/' . 'admin';
        $this->assign('url', $url);
        $one = array('name' => '权限管理', 'value' => U('Auth/admin'));
        $two = array('name' => '管理员', 'value' => U('Auth/admin'));
        $this->assign("one", $one);
        $this->assign("two", $two);

        $Admin      = D('Admin');
        $AdminGroup = D('AdminGroup');

        // 分页开始
        // 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
        $count = M('Admin')->count();// 查询满足要求的总记录数
        $Page  = new \Think\Page($count, 10);// 实例化分页类 传入总记录数和每页显示的记录数
        $Page->setConfig('header','<li class="disabled hwh-page-info"><a>共<em>%TOTAL_ROW%</em>条  <em>%NOW_PAGE%</em>/%TOTAL_PAGE%</a></li>');
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $Page->setConfig('last','末页');
        $Page->setConfig('first','首页');
        $Page->setConfig('theme','%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
        $show = bootstrap_page_style($Page->show());// 分页显示输出
        $this->assign('page',$show);// 赋值分页输出

        $list = $Admin->lists();
        foreach ($list as $k => $v) {
            $map['id']              = $v['group_id'];
            $info_group             = $AdminGroup->info($map);
            $list[$k]['group_name'] = $info_group['name'];
        }

        $this->assign('list', $list);
        $this->display();
    }
    //管理员添加
    public function adminAddEdit() {
        $url = CONTROLLER_NAME . '/' . 'admin';
        $this->assign('url', $url);
        $one   = array('name' => '权限管理', 'value' => U('Auth/admin'));
        $two   = array('name' => '管理员', 'value' => U('Auth/admin'));
        $three = array('name' => '管理员添加', 'value' => U('Auth/adminAddEdit'));
        $this->assign("one", $one);
        $this->assign("two", $two);
        $this->assign("three", $three);

        $Admin      = D('Admin');
        $AdminGroup = D('AdminGroup');

        $map['id'] = I('id', 0);
        $info      = $Admin->info($map);

        $this->assign('info', $info);

        $map_group['status'] = 1;
        $list_group = $AdminGroup->lists($map_group);
        $this->assign('list_group', $list_group);

        if (IS_POST) {
            $data['account']    = I('account');
            $data['nickname']   = I('nickname');
            $data['phone']      = I('phone');
            $data['group_id']   = I('group_id');
            $data['s_province'] = I('s_province');
            $data['s_city']     = I('s_city');
            $data['s_county']   = I('s_county');
            $data['address']    = I('address');
            $data['remark']     = I('remark');
            $data['portrait']   = trim(trim(I('post_banner'), '"'), '&quot;');

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
    // 定位
    public function baseToolSrcLBS(){

        $url = "http://apis.map.qq.com/ws/geocoder/v1/?address=".$_POST['address'].'&key=E32BZ-HVNWS-KVPOJ-6JS3E-INDYZ-D2B5O';

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        // post数据
        curl_setopt($ch, CURLOPT_GET, 1);
        // post的变量
        // curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post_data) );

        $output = curl_exec($ch);
        curl_close($ch);

        $output = json_decode($output,true);

        $this->ajaxReturn($output);
    }
    
    // 模块
    public function module() {
        $url = CONTROLLER_NAME . '/' . 'module';
        $this->assign('url', $url);
        $one = array('name' => '权限管理', 'value' => U('Auth/module'));
        $two = array('name' => '模块', 'value' => U('Auth/module'));
        $this->assign("one", $one);
        $this->assign("two", $two);

        $AdminModule = D('AdminModule');

        $map['status'] = array('NEQ', -1);

        // 分页开始
        // 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
        $count = M('AdminModule')->where($map)->count();// 查询满足要求的总记录数
        $Page  = new \Think\Page($count, 10);// 实例化分页类 传入总记录数和每页显示的记录数
        $Page->setConfig('header','<li class="disabled hwh-page-info"><a>共<em>%TOTAL_ROW%</em>条  <em>%NOW_PAGE%</em>/%TOTAL_PAGE%</a></li>');
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $Page->setConfig('last','末页');
        $Page->setConfig('first','首页');
        $Page->setConfig('theme','%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
        $show = bootstrap_page_style($Page->show());// 分页显示输出
        $this->assign('page',$show);// 赋值分页输出

        $list =  $AdminModule->lists($map, $Page->firstRow, $Page->listRows);

        $this->assign('list', $list);
        $this->display();
    }
    // 模块添加、编辑
    public function moduleAddEdit() {
        $url = CONTROLLER_NAME . '/' . 'module';
        $this->assign('url', $url);
        $one = array('name' => '权限管理', 'value' => U('Auth/module'));
        $two = array('name' => '模块', 'value' => U('Auth/module'));
        $three = array('name' => '模块添加、编辑', 'value' => U('Auth/moduleAddEdit'));
        $this->assign("one", $one);
        $this->assign("two", $two);
        $this->assign("three", $three);

        $AdminModule = D('AdminModule');

        $map['id'] = I('id', 0);
        $info      = $AdminModule->info($map);
        $this->assign('info', $info);

        $list = $AdminModule->lists();
        $this->assign('list', $list);

        if (IS_POST) {
            $data['pid']  = I('pid');
            $data['name'] = I('name');
            
            if ($info) {
                $res = $AdminModule->update($map, $data);
            } else {
                $data['create_time'] = time();
                $res = $AdminModule->add($data);
            }
            if ($res['status']) {
                $this->success('提交成功', U('moduleAddEdit'));
            } else {
                $this->error('提交失败');
            }
            exit;
        }

        $this->display();
    }

    // 规则
    public function rule() {
        $url = CONTROLLER_NAME . '/' . 'rule';
        $this->assign('url', $url);
        $one = array('name' => '权限管理', 'value' => U('Auth/rule'));
        $two = array('name' => '规则', 'value' => U('Auth/rule'));
        $this->assign("one", $one);
        $this->assign("two", $two);

        $AdminRule   = D('AdminRule');
        $AdminModule = D('AdminModule');

        $map['status'] = array('NEQ', -1);

        // 分页开始
        // 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
        $count = M('AdminRule')->where($map)->count();// 查询满足要求的总记录数
        $Page  = new \Think\Page($count, 1);// 实例化分页类 传入总记录数和每页显示的记录数
        $Page->setConfig('header','<li class="disabled hwh-page-info"><a>共<em>%TOTAL_ROW%</em>条  <em>%NOW_PAGE%</em>/%TOTAL_PAGE%</a></li>');
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $Page->setConfig('last','末页');
        $Page->setConfig('first','首页');
        $Page->setConfig('theme','%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
        $show = bootstrap_page_style($Page->show());// 分页显示输出
        $this->assign('page',$show);// 赋值分页输出
        $list = $AdminRule->lists($map, $Page->firstRow, $Page->listRows);

        foreach ($list as $k => $v) {
            $map['id'] = $v['module'];
            $info = $AdminModule->info($map);
            $list[$k]['module'] = $info['name'];
        }

        $this->assign('list', $list);
        $this->display();
    }
    // 规则添加、编辑
    public function ruleAddEdit() {
        $url = CONTROLLER_NAME . '/' . 'rule';
        $this->assign('url', $url);
        $one = array('name' => '权限管理', 'value' => U('Auth/rule'));
        $two = array('name' => '规则', 'value' => U('Auth/rule'));
        $three = array('name' => '规则添加、编辑', 'value' => U('Auth/ruleAddEdit'));
        $this->assign("one", $one);
        $this->assign("two", $two);
        $this->assign("three", $three);

        $AdminModule = D('AdminModule');
        $AdminRule   = D('AdminRule');

        $map['id'] = I('id', 0);
        $info      = $AdminRule->info($map);
        $this->assign('info', $info);

        $list = $AdminModule->lists();
        $this->assign('list', $list);

        if (IS_POST) {
            $data['module']    = I('module');
            $data['url']       = I('url');
            $data['name']      = I('name');
            $data['condition'] = I('condition');
            $data['status']    = I('status');

            if ($info) {
                $res = $AdminRule->update($map, $data);
            } else {
                $data['create_time'] = time();
                $res = $AdminRule->add($data);
            }
            if ($res['status']) {
                $this->success('提交成功', U('ruleAddEdit'));
            } else {
                $this->error('提交失败');
            }
            exit;
        }

        $this->display();
    }

    // 权限
    public function auth() {
        $url = CONTROLLER_NAME . '/' . 'auth';
        $this->assign('url', $url);
        $one = array('name' => '权限管理', 'value' => U('Auth/auth'));
        $two = array('name' => '权限', 'value' => U('Auth/auth'));
        $this->assign("one", $one);
        $this->assign("two", $two);

        $AdminGroup = D('AdminGroup');
        $AdminRule  = D('AdminRule');

        $map['status'] = array('GT', 0);

        // 分页开始
        // 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
        $count = M('AdminGroup')->where($map)->count();// 查询满足要求的总记录数
        $Page  = new \Think\Page($count, 1);// 实例化分页类 传入总记录数和每页显示的记录数
        $Page->setConfig('header','<li class="disabled hwh-page-info"><a>共<em>%TOTAL_ROW%</em>条  <em>%NOW_PAGE%</em>/%TOTAL_PAGE%</a></li>');
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $Page->setConfig('last','末页');
        $Page->setConfig('first','首页');
        $Page->setConfig('theme','%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
        $show = bootstrap_page_style($Page->show());// 分页显示输出
        $this->assign('page',$show);// 赋值分页输出
        $list = $AdminGroup->lists($map, $Page->firstRow, $Page->listRows);

        $name = '';
        foreach ($list as $k => $v) {
            $rules = explode(',',$v['rules']);
            foreach ($rules as $k1 => $v1) {
                $map['id'] = $v1;
                $info_rule = $AdminRule->info($map);
                $name      .= $info_rule['name'] . '，';
            }
            $list[$k]['rule_name'] = rtrim($name, '，');
        }

        $this->assign('list', $list);
        $this->display();
    }
    // 规则添加、编辑
    public function authAddEdit() {
        $url = CONTROLLER_NAME . '/' . 'auth';
        $this->assign('url', $url);
        $one   = array('name' => '权限管理', 'value' => U('Auth/auth'));
        $two   = array('name' => '权限', 'value' => U('Auth/auth'));
        $three = array('name' => '权限添加、编辑', 'value' => U('Auth/authAddEdit'));
        $this->assign("one", $one);
        $this->assign("two", $two);
        $this->assign("three", $three);

        $AdminModule = D('AdminModule');
        $AdminRule   = D('AdminRule');
        $AdminGroup  = D('AdminGroup');
        $Admin       = D('Admin');

        $map_admin['id'] = I('id', 0);
        $info_admin      = $Admin->info($map_admin);
        $map_group['id'] = $info_admin['group_id'];
        $info_group      = $AdminGroup->info($map_group);

        $this->assign('info', $info_group);

        $rule_arr = explode(',',$info_group['rules']);
        $list_module = $AdminModule->lists();
        if ($list_module) {
            foreach ($list_module as $k => $v) {
                $map_rule['module']      = $v['id'];
                $list_module[$k]['rule'] = $AdminRule->lists($map_rule);
                foreach ($list_module[$k]['rule'] as $k1 => $v1) {
                    if (in_array($v1['id'],$rule_arr)) {
                        $list_module[$k]['rule'][$k1]['check'] = 1;
                    }
                }
        	}
        }
        $this->assign('list_module',$list_module );

        if (IS_POST) {
            $data['rules']       = rtrim(implode(',', I('rules')), ',');
            $data['name']        = I('name');
            $data['description'] = I('description');
            $data['status']      = I('status');

            if ($info_group) {
                $res = $AdminGroup->update($map_group, $data);
            } else {
                $data['create_time'] = time();
                $res = $AdminGroup->add($data);
            }
            if ($res['status']) {
                $this->success('提交成功', U('auth'));
            } else {
                $this->error('提交失败');
            }
            exit;
        }

        $this->display();
    }
    
    //安全设置
    public function resetPwd() {
        $url = CONTROLLER_NAME . '/' . 'admin';
        $this->assign('url', $url);
        $one = array('name' => '权限管理', 'value' => U('Auth/resetPwd'));
        $two = array('name' => '安全设置', 'value' => U('Auth/resetPwd'));
        $this->assign("one", $one);
        $this->assign("two", $two);

        $this->display();
    }

    // 我的权限
    public function myAuth() {
        $url = CONTROLLER_NAME . '/' . 'myAuth';
        $this->assign('url', $url);
        $one = array('name' => '权限管理', 'value' => U('Auth/myAuth'));
        $two = array('name' => '我的权限', 'value' => U('Auth/myAuth'));
        $this->assign("one", $one);
        $this->assign("two", $two);

        $AdminModule = D('AdminModule');
        $AdminRule   = D('AdminRule');
        $AdminGroup  = D('AdminGroup');

        $info_admin      = session('admin_info');
        $map_group['id'] = $info_admin['group_id'];
        $info_group      = $AdminGroup->info($map_group);

        $rule_arr = explode(',',$info_group['rules']);
        $list_module = $AdminModule->lists();
        if ($list_module) {
            foreach ($list_module as $k => $v) {
                $map_rule['module']      = $v['id'];
                $list_module[$k]['rule'] = $AdminRule->lists($map_rule);
                foreach ($list_module[$k]['rule'] as $k1 => $v1) {
                    if (in_array($v1['id'],$rule_arr)) {
                        $list_module[$k]['rule'][$k1]['check'] = 1;
                        $list_module[$k]['check']              = 1;

                    }
                }
            }
        }

        $this->assign('list_module',$list_module );

        $this->assign('info', $info_admin);
        $this->display();
    }

}
