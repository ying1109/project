<?php
namespace Admin\Controller;
use Think\Controller;

header('content-type:text/html; charset=utf-8');
class UploadController extends BaseController {
    //轮播图上传
    public function bannerUpload(){
        header('Access-Control-Allow-Origin:*');
        // 大小需要修改ini文件的  upload_max_filesize、post_max_size
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   = 50 * 1024 * 1024 ;// 设置附件上传大小
        $upload->exts      = array('jpg','gif','png','jpeg');// 设置附件上传类型
        $upload->rootPath  = 'Uploads';  // 设置附件上传根目录
        $upload->savePath  = '/system/banner/'; // 设置附件上传目录    // 上传文件
        $info              = $upload->upload();

        if (!$info) {// 上传错误提示错误信息
            $this->ajaxReturn(array('status'=>0, 'info'=>$upload->getError()));
        } else {// 上传成功
            foreach($info as $file){
                $image = new \Think\Image();
                $image->open('./Uploads' . $file['savepath'] . $file['savename'] );// 按照原图的比例生成一个最大为150*150的缩略图并保存为thumb.jpg
                $file_path = '/Uploads'.$file['savepath'].$file['savename'];
                $image->thumb(600, 600,\Think\Image::IMAGE_THUMB_CENTER)->save( ".".$file_path );

                $this -> ajaxReturn(
                    array(
                        'status'    =>'1',
                        'file_info' => array(
                            'file_path' => $file_path,
                            'file_ext'  => $file['ext'],
                            'name'      => $file['name'],
                            'savename'  => $file['savename'],
                        )
                    )
                );
            }
        }
    }
    //管理员头像上传
    public function adminPortraitUpload(){
        header('Access-Control-Allow-Origin:*');
        // 大小需要修改ini文件的  upload_max_filesize、post_max_size
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   = 50 * 1024 * 1024 ;// 设置附件上传大小
        $upload->exts      = array('jpg','gif','png','jpeg');// 设置附件上传类型
        $upload->rootPath  = 'Uploads';  // 设置附件上传根目录
        $upload->savePath  = '/system/admin/'; // 设置附件上传目录    // 上传文件
        $info              = $upload->upload();

        if (!$info) {// 上传错误提示错误信息
            $this->ajaxReturn(array('status'=>0, 'info'=>$upload->getError()));
        } else {// 上传成功
            foreach($info as $file){
                $image = new \Think\Image();
                $image->open('./Uploads' . $file['savepath'] . $file['savename'] );// 按照原图的比例生成一个最大为150*150的缩略图并保存为thumb.jpg
                $file_path = '/Uploads'.$file['savepath'].$file['savename'];
                $image->thumb(600, 600,\Think\Image::IMAGE_THUMB_CENTER)->save( ".".$file_path );

                $this -> ajaxReturn(
                    array(
                        'status'    =>'1',
                        'file_info' => array(
                            'file_path' => $file_path,
                            'file_ext'  => $file['ext'],
                            'name'      => $file['name'],
                            'savename'  => $file['savename'],
                        )
                    )
                );
            }
        }
    }
}