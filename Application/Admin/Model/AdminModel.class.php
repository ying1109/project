<?php

namespace Admin\Model;
use Think\Model;

class AdminModel extends Model {
    public function add($data) {
        $M   = M('Admin');
        $res = $M->add($data);

        if ($res) {
            return (array('status'=>1, 'res'=>$res, 'msg'=>'添加成功！'));
        } else {
            return (array('status'=>0, 'msg'=>'添加失败！'));
        }
    }

    public function info($map) {
        $M    = M('Admin');
        $info = $M->where($map)->find();

        return $info;
    }

    public function update($map, $data) {
        $M   = M('Admin');
        $res = $M->where($map)->save($data);

        if ($res) {
            return (array('status'=>1, 'res'=>$res, 'msg'=>'修改成功！'));
        } else {
            return (array('status'=>0, 'msg'=>'修改失败！'));
        }
    }

    public function lists($map = '', $firstRow = 0,$listRows = 0,$sort = "id asc") {
        $M    = M('Admin');
        $list = $M->where($map)->order($sort)->limit($firstRow,$listRows)->select();

        return $list;
    }

    public function delete($map) {
        $M   = M('Admin');
        $res = $M->where($map)->delete();

        if ($res) {
            return (array('status'=>1, 'res'=>$res, 'msg'=>'删除成功！'));
        } else {
            return (array('status'=>0, 'msg'=>'删除失败！'));
        }
    }
}

?>