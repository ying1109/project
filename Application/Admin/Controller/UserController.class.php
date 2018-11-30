<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends Controller {
    public function user(){
    	$one = array('name'=>'权限管理','value'=>U('Auth/group'));
    	$two = array('name'=>'权限组管理','value'=>U('Auth/group'));
    	$this->assign("one",$one);
    	$this->assign("two",$two);
    	
        $this->display();
    }
}