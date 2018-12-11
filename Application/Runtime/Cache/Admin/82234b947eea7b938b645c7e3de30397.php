<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>MyProject</title>

	<!-- Css Files  -->
	<link rel="stylesheet" href="/Public/Admin/base/css/base.css">
	<link rel="stylesheet" href="/Public/Admin/base/css/bootstrap.css">
	<!-- <link rel="stylesheet" href="/Public/Admin/css/font-awesome.min.css"> -->
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

	<!-- 顶部引入其他CSS文件 -->
	
    <link type="text/css" href="/Public/Admin/webuploader/webuploader.css" rel="stylesheet" />
    <link type="text/css" href="/Public/Admin/webuploader/style.css" rel="stylesheet" />

</head>
<body>
	

	<!-- 导航开始 -->
	
		<div id="top">
	<div id="left">
		<span id="title">后台管理</span>
	</div>
	<i id="top_icon" class="fa fa-align-justify fa-2x"></i>
	<div id="right">
		<ul>
			<li><span><?php echo ($admin["nickname"]); ?></span></li>
			<li><span><?php echo ($url); ?></span></li>
			<li><span><?php echo ($admin["nickname"]); ?></span></li>
			<li>
				<a href="<?php echo U('Login/loginOut');?>">
					<i class="fa fa-power-off fa-lg"></i>
					<span>退出</span>
				</a>
			</li>
		</ul>
	</div>
</div>
	
	<!-- 导航结束 -->

	<!-- 侧边栏开始 -->
	
		<div id="navMenubox">
	<ul class="navMenu">
		<li> 
		    <a href="<?php echo U('Index/index');?>" <?php if(CONTROLLER_NAME == 'Index'): ?>class="active"<?php endif; ?> >
		        <i class="fa fa-user"></i>
		        <span>个人中心</span>
		    </a> 
		</li>

	    <li>
	        <a href="javascript:;" <?php if(CONTROLLER_NAME == Poetry): ?>class="active"<?php endif; ?> >
	            <i class="fa fa-user"></i>
	            <span class="">诗词歌赋</span>
	            <span class="arrow"></span>
	        </a>
	        <ul class="sub-menu"  <?php if(CONTROLLER_NAME == Poetry): ?>style="display: block;"<?php endif; ?>>
	            <li>
					<a href="<?php echo U('Poetry/poem');?>" <?php if(($_SERVER['PATH_INFO'] == 'Poetry/poem') OR ($url == 'Poetry/poem')): ?>class="active"<?php endif; ?>>诗</a>
				</li>
	            <li>
					<a href="<?php echo U('Poetry/ci');?>" <?php if($_SERVER['PATH_INFO'] == 'Poetry/ci'): ?>class="active"<?php endif; ?>>词</a>
				</li>
	            <li>
					<a href="<?php echo U('Poetry/song');?>" <?php if($_SERVER['PATH_INFO'] == 'Poetry/song'): ?>class="active"<?php endif; ?>>歌</a>
				</li>
	            <li>
					<a href="<?php echo U('Poetry/fu');?>" <?php if($_SERVER['PATH_INFO'] == 'Poetry/fu'): ?>class="active"<?php endif; ?>>赋</a>
				</li>
	        </ul>
	    </li>

	    <li>
	        <a href="javascript:;" <?php if(CONTROLLER_NAME == Auth): ?>class="active"<?php endif; ?> >
	            <i class="fa fa-user"></i>
	            <span class="">权限管理</span>
	            <span class="arrow"></span>
	        </a>
	        <ul class="sub-menu"  <?php if(CONTROLLER_NAME == Auth): ?>style="display: block;"<?php endif; ?>>
	            <li>
					<a href="<?php echo U('Auth/myAuth');?>" <?php if(($_SERVER['PATH_INFO'] == 'Auth/myAuth') OR ($url == 'Auth/myAuth')): ?>class="active"<?php endif; ?>>我的权限</a>
				</li>
	            <li>
					<a href="<?php echo U('Auth/admin');?>" <?php if(($_SERVER['PATH_INFO'] == 'Auth/admin') OR ($url == 'Auth/admin')): ?>class="active"<?php endif; ?>>管理员</a>
				</li>
	            <li>
					<a href="<?php echo U('Auth/resetPwd');?>" <?php if(($_SERVER['PATH_INFO'] == 'Auth/resetPwd') OR ($url == 'Auth/resetPwd')): ?>class="active"<?php endif; ?>>安全设置</a>
				</li>
	        </ul>
	    </li>

		<li>
			<a href="javascript:;" <?php if(CONTROLLER_NAME == System): ?>class="active"<?php endif; ?> >
			<i class="fa fa-user"></i>
			<span class="">系统设置</span>
			<span class="arrow"></span>
			</a>
			<ul class="sub-menu"  <?php if(CONTROLLER_NAME == System): ?>style="display: block;"<?php endif; ?>>
				<li>
					<a href="<?php echo U('System/aboutUs');?>" <?php if($url == 'System/aboutUs'): ?>class="active"<?php endif; ?>>关于我们</a>
					<!--<a href="<?php echo U('System/aboutUs');?>" <?php if(($_SERVER['PATH_INFO'] == 'System/aboutUs') OR ($url == 'System/aboutUs')): ?>class="active"<?php endif; ?>>关于我们</a>-->
				</li>
				<li>
					<a href="<?php echo U('System/banner');?>" <?php if($url == 'System/banner'): ?>class="active"<?php endif; ?>>轮播图</a>
					<!--<a href="<?php echo U('System/banner');?>" <?php if(($_SERVER['PATH_INFO'] == 'System/banner') OR ($url == 'System/banner')): ?>class="active"<?php endif; ?>>轮播图</a>-->
				</li>
			</ul>
		</li>

	</ul>
</div>
	

	<!-- 内容开始 -->
	<div class="page_content">
		
			<div class="header_default">
	<div class="panel panel-default">
		<div class="panel-body">
    		<span class="navlist">导航列表</span>
    		<ol class="breadcrumb">
    		    <?php if($one['name'] != ''): ?><li>
    		    		<a href="<?php echo ($one["value"]); ?>"><?php echo ($one["name"]); ?></a>
    		    	</li><?php endif; ?>
    		    <?php if($two['name'] != ''): ?><li>
    		    		<a href="<?php echo ($two["value"]); ?>"><?php echo ($two["name"]); ?></a>
    		    	</li><?php endif; ?>
    		    <?php if($three['name'] != ''): ?><li>
    		    		<a href="<?php echo ($three["value"]); ?>"><?php echo ($three["name"]); ?></a>
    		    	</li><?php endif; ?>
    		    <?php if($four['name'] != ''): ?><li>
    		    		<a href="<?php echo ($four["value"]); ?>"><?php echo ($four["name"]); ?></a>
    		    	</li><?php endif; ?>
    		</ol>
    	</div>
    </div>
</div>
		

		
    <div class="panel panel-default">
        <div class="panel-body">
            <form class="form-horizontal" method="POST" action="">
                <input type="hidden" name="id" value="<?php echo ($info['id']); ?>">

                <div class="form-group">
                    <label class="col-sm-2 control-label">账号：</label>
                    <div class="col-sm-6">
                        <input class="form-control" name="account" value="<?php echo ($info["account"]); ?>" required >
                    </div>
                </div>

                <?php if($info["id"] == ''): ?><div class="form-group">
                        <label class="col-sm-2 control-label">密码：</label>
                        <div class="col-sm-6">
                            <input class="form-control" name="password" required>
                        </div>
                    </div><?php endif; ?>

                <div class="form-group">
                    <label class="col-sm-2 control-label">昵称：</label>
                    <div class="col-sm-6">
                        <input class="form-control" name="nickname" value="<?php echo ($info["nickname"]); ?>" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">电话：</label>
                    <div class="col-sm-6">
                        <input class="form-control" name="phone" value="<?php echo ($info["phone"]); ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label form-label">头像：</label>
                    <div class="col-sm-6">
                        <div class="project-file">
                            <div class="flie-btn">
                                <div class="file-left" style="margin: 8px 0;">
                                    <span class="updata-btn upload-file" data-toggle="modal" data-target=".modal-uploader" data-type="banner">
                                        <i class="fa fa-upload"></i>&nbsp;&nbsp;上传头像
                                    </span>
                                </div>
                            </div>
                            <div class="file-list">
                                <div class="post_list mt">
                                    <div class="flie-box col-sm-5">
                                        <div class="file-img">
                                            <img src="<?php echo ($info["portrait"]); ?>" onerror="javascript:this.src='/Public/Common/img/default.png'">
                                        </div>
                                        <div class="close-btn">
                                            <i class="fa fa-times"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label form-label">地址：</label>
                    <div class="col-sm-6">
                        <select class="form-control" name="s_province" id="s_province" style="display:inline-block;width: 150px;">
                            <option value="">省</option>
                        </select>
                        <select class="form-control" name="s_city" id="s_city" style="display:inline-block;width: 150px;margin-left: 20px;">
                            <option value="">市</option>
                        </select>
                        <select class="form-control" name="s_county" id="s_county" style="display:inline-block;width: 150px;margin-left: 20px;">
                            <option value="">区</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">详细地址：</label>
                    <div class="col-sm-6">
                        <input class="form-control" name="address">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">备注：</label>
                    <div class="col-sm-6">
                        <input class="form-control" name="remark">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-4">
                        <button type="submit" class="btn btn-primary">提交</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal 弹框提交文件-->
    <div class="modal fade modal-uploader" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="uplader_box" style="">
                    <div id="uploader">
                        <div class="queueList">
                            <div id="dndArea" class="placeholder">
                                <div id="filePicker">
                                    <!--<div class="webuploader-pick">点击选择图片</div>-->
                                </div>
                                <p>或将文件拖到这里，单次最多可选4个文件</p>
                            </div>
                        </div>
                        <div class="statusBar" style="display:none;">
                            <div class="progress">
                                <span class="text">0%</span>
                                <span class="percentage"></span>
                            </div><div class="info"></div>
                            <div class="btns">
                                <div id="filePicker2"></div><div class="uploadBtn">开始上传</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


		
			
		
	</div>

<!-- jQuery -->
<script type="text/javascript" src="/Public/Admin/base/js/jquery-3.3.1.js"></script>
<!-- Bootstrap -->
<script type="text/javascript" src="/Public/Admin/base/js/bootstrap.js"></script>

<script type="text/javascript" src="/Public/Admin/base/js/base.js"></script>

<!--底部引入其他js文件-->

    <!--地区-->
    <script type="text/javascript" src="/Public/Admin/area/area.js"></script>
    <script>
        _init_area();
    </script>
    <!--选中地区-->
    <script>
        var s_province = "<?php echo ($info['s_province']); ?>";
        var s_city     = "<?php echo ($info['s_city']); ?>";
        var s_county   = "<?php echo ($info['s_county']); ?>";
        if (s_province) {
            $("#s_province option:selected").html(s_province);
            $("#s_city option:selected").html(s_city);
            $("#s_county option:selected").html(s_county);
            $("#s_province option:selected").val(s_province);
            $("#s_city option:selected").val(s_city);
            $("#s_county option:selected").val(s_county);
        }
    </script>
    <!--头像上传-->
    <script type="text/javascript" charset="utf-8" src="/Public/Admin/webuploader/webuploader.js"></script>
    <script>
        $(function() {
            var $m_btn = $('.updata-btn');
            var $modal = $('.modal-uploader');
            // 测试 bootstrap 居中
            $modal.on('show.bs.modal', function() {
                var $this = $(this);
                var $modal_dialog = $this.find('.modal-dialog');
                // 关键代码，如没将modal设置为 block，则$modala_dialog.height() 为零
                $this.css('display', 'block');
                $modal_dialog.css({
                    'margin-top': Math.max(0, ($(window).height() - $modal_dialog.height()) / 2)
                });
            });

            //form表单数据转换json
            $.fn.serializeObject = function() {
                var o = {};
                var a = this.serializeArray();
                $.each(a, function() {
                    if (o[this.name]) {
                        if (!o[this.name].push) {
                            o[this.name] = [o[this.name]];
                        }
                        o[this.name].push(this.value || '');
                    } else {
                        o[this.name] = this.value || '';
                    }
                });
                return o;
            };

            // 图片上传
            var _this_upload;
            var _this_upload_type;
            $m_btn.on("click", function() {
                domInput = $(this).parents(".flie-btn")
                _this_upload = $(this).parents(".project-file").find("div.post_list");
                _this_upload_type = $(this).data("type");

            })
            // 删除已上传文件
            $(".file-list").delegate(".close-btn", 'click', function() {
                $(this).parents(".flie-box").remove();
            })

            // 当domReady的时候开始初始化
            $(function() {
                var $wrap = $('#uploader'),

                    // 图片容器
                    $queue = $('<ul class="filelist"></ul>')
                        .appendTo($wrap.find('.queueList')),

                    // 状态栏，包括进度和控制按钮
                    $statusBar = $wrap.find('.statusBar'),

                    // 文件总体选择信息。
                    $info = $statusBar.find('.info'),

                    // 上传按钮
                    $upload = $wrap.find('.uploadBtn'),

                    // 没选择文件之前的内容。
                    $placeHolder = $wrap.find('.placeholder'),

                    $progress = $statusBar.find('.progress').hide(),

                    // 添加的文件数量
                    fileCount = 0,

                    // 添加的文件总大小
                    fileSize = 0,

                    // 优化retina, 在retina下这个值是2
                    ratio = window.devicePixelRatio || 1,

                    // 缩略图大小
                    thumbnailWidth = 110 * ratio,
                    thumbnailHeight = 110 * ratio,

                    // 可能有pedding, ready, uploading, confirm, done.
                    state = 'pedding',

                    // 所有文件的进度信息，key为file id
                    percentages = {},
                    // 判断浏览器是否支持图片的base64
                    isSupportBase64 = (function() {
                        var data = new Image();
                        var support = true;
                        data.onload = data.onerror = function() {
                            if (this.width != 1 || this.height != 1) {
                                support = false;
                            }
                        }
                        data.src = "data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==";
                        return support;
                    })(),

                    // 检测是否已经安装flash，检测flash的版本
                    flashVersion = (function() {
                        var version;

                        try {
                            version = navigator.plugins['Shockwave Flash'];
                            version = version.description;
                        } catch (ex) {
                            try {
                                version = new ActiveXObject('ShockwaveFlash.ShockwaveFlash')
                                    .GetVariable('$version');
                            } catch (ex2) {
                                version = '0.0';
                            }
                        }
                        version = version.match(/\d+/g);
                        return parseFloat(version[0] + '.' + version[1], 10);
                    })(),

                    supportTransition = (function() {
                        var s = document.createElement('p').style,
                            r = 'transition' in s ||
                                'WebkitTransition' in s ||
                                'MozTransition' in s ||
                                'msTransition' in s ||
                                'OTransition' in s;
                        s = null;
                        return r;
                    })(),

                    // WebUploader实例
                    uploader;

                if (!WebUploader.Uploader.support('flash') && WebUploader.browser.ie) {

                    // flash 安装了但是版本过低。
                    if (flashVersion) {
                        (function(container) {
                            window['expressinstallcallback'] = function(state) {
                                switch (state) {
                                    case 'Download.Cancelled':
                                        alert('您取消了更新！')
                                        break;

                                    case 'Download.Failed':
                                        alert('安装失败')
                                        break;

                                    default:
                                        alert('安装已成功，请刷新！');
                                        break;
                                }
                                delete window['expressinstallcallback'];
                            };

                            var swf = './expressInstall.swf';
                            // insert flash object
                            var html = '<object type="application/' +
                                'x-shockwave-flash" data="' + swf + '" ';

                            if (WebUploader.browser.ie) {
                                html += 'classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" ';
                            }

                            html += 'width="100%" height="100%" style="outline:0">' +
                                '<param name="movie" value="' + swf + '" />' +
                                '<param name="wmode" value="transparent" />' +
                                '<param name="allowscriptaccess" value="always" />' +
                                '</object>';

                            container.html(html);

                        })($wrap);

                        // 压根就没有安转。
                    } else {
                        $wrap.html('<a href="http://www.adobe.com/go/getflashplayer" target="_blank" border="0"><img alt="get flash player" src="http://www.adobe.com/macromedia/style_guide/images/160x41_Get_Flash_Player.jpg" /></a>');
                    }

                    return;
                } else if (!WebUploader.Uploader.support()) {
                    alert('Web Uploader 不支持您的浏览器！');
                    return;
                }

                // 实例化
                uploader = WebUploader.create({
                    pick: {
                        id: '#filePicker',
                        label: '点击选择文件'
                    },
                    formData: {
                        'sid': $('#school').val(),
                        'cid': $('#class').val(),
                        'aid': $('#album').val(),
                    },
                    dnd: '#dndArea',
                    paste: '#uploader',
                    swf: '/Public/Admin/webuploader/Uploader.swf',
                    chunked: false,
                    chunkSize: 512 * 1 * 1024,
                    server: "<?php echo U('Upload/adminPortraitUpload');?>",
                    compress: false,
                    // runtimeOrder: 'flash',

                    // accept: {
                    //     title: 'Images',
                    //     extensions: 'gif,jpg,jpeg,bmp,png',
                    //     mimeTypes: 'image/*'
                    // },

                    // 禁掉全局的拖拽功能。这样不会出现图片拖进页面的时候，把图片打开。
                    disableGlobalDnd: true,
                    fileNumLimit: 1,
                    fileSizeLimit: 50 * 1024 * 1024, // 总大小500 M
                    fileSingleSizeLimit: 5 * 1024 * 1024 // 单个文件5 M
                });

                // 开始上传
                $upload.on('click', function() {
                    if ($(this).hasClass('disabled')) {
                        return false;
                    }
                    // 根据上传不同类型上传至不同的地址
                    if (state === 'ready') {
                        if (_this_upload_type == 'banner') {
                            uploader.options.server = "<?php echo U('Upload/adminPortraitUpload');?>";
                        }

                        uploader.upload();
                    } else if (state === 'paused') {
                        if (_this_upload_type == 'banner') {
                            uploader.options.server = "<?php echo U('Upload/adminPortraitUpload');?>";
                        }

                        uploader.upload();
                    } else if (state === 'uploading') {
                        uploader.stop();
                    }
                });

                // 拖拽时不接受 js, txt 文件。
                uploader.on('dndAccept', function(items) {
                    var denied = false,
                        len = items.length,
                        i = 0,
                        // 修改js类型
                        unAllowed = 'text/plain;application/javascript ';

                    for (; i < len; i++) {
                        // 如果在列表里面
                        if (~unAllowed.indexOf(items[i].type)) {
                            denied = true;
                            break;
                        }
                    }

                    return !denied;
                });

                uploader.on('dialogOpen', function() {
                    // console.log('here');
                });

                // uploader.on('filesQueued', function() {
                //     uploader.sort(function( a, b ) {
                //         if ( a.name < b.name )
                //           return -1;
                //         if ( a.name > b.name )
                //           return 1;
                //         return 0;
                //     });
                // });

                // 添加“添加文件”的按钮，
                // uploader.addButton({
                //     id: '#filePicker2',
                //     label: '继续添加'
                // });

                uploader.on('ready', function() {
                    window.uploader = uploader;
                });

                // 当有文件添加进来时执行，负责view的创建
                function addFile(file) {
                    var $li = $('<li id="' + file.id + '">' +
                        '<p class="title">' + file.name + '</p>' +
                        '<p class="imgWrap"></p>' +
                        '<p class="progress"><span></span></p>' +
                        '</li>'),

                        $btns = $('<div class="file-panel">' +
                            '<span class="cancel">删除</span>' +
                            '<span class="rotateRight">向右旋转</span>' +
                            '<span class="rotateLeft">向左旋转</span></div>').appendTo($li),
                        $prgress = $li.find('p.progress span'),
                        $wrap = $li.find('p.imgWrap'),
                        $info = $('<p class="error"></p>'),

                        showError = function(code) {
                            switch (code) {
                                case 'exceed_size':
                                    text = '文件大小超出';
                                    break;

                                case 'interrupt':
                                    text = '上传暂停';
                                    break;

                                default:
                                    text = '上传失败，请重试';
                                    break;
                            }

                            $info.text(text).appendTo($li);
                        };

                    if (file.getStatus() === 'invalid') {
                        showError(file.statusText);
                    } else {
                        // @todo lazyload
                        $wrap.text('预览中');
                        uploader.makeThumb(file, function(error, src) {
                            var img;

                            if (error) {
                                $wrap.text('不能预览');
                                return;
                            }

                            if (isSupportBase64) {
                                img = $('<img src="' + src + '">');
                                $wrap.empty().append(img);
                            } else {
                                $.ajax('../../server/preview.php', {
                                    method: 'POST',
                                    data: src,
                                    dataType: 'json'
                                }).done(function(response) {
                                    if (response.result) {
                                        img = $('<img src="' + response.result + '">');
                                        $wrap.empty().append(img);
                                    } else {
                                        $wrap.text("预览出错");
                                    }
                                });
                            }
                        }, thumbnailWidth, thumbnailHeight);

                        percentages[file.id] = [file.size, 0];
                        file.rotation = 0;
                    }

                    file.on('statuschange', function(cur, prev) {
                        if (prev === 'progress') {
                            $prgress.hide().width(0);
                        } else if (prev === 'queued') {
                            $li.off('mouseenter mouseleave');
                            $btns.remove();
                        }

                        // 成功
                        if (cur === 'error' || cur === 'invalid') {
                            console.log(file.statusText);
                            showError(file.statusText);
                            percentages[file.id][1] = 1;
                        } else if (cur === 'interrupt') {
                            showError('interrupt');
                        } else if (cur === 'queued') {
                            $info.remove();
                            $prgress.css('display', 'block');
                            percentages[file.id][1] = 0;
                        } else if (cur === 'progress') {
                            $info.remove();
                            $prgress.css('display', 'block');
                        } else if (cur === 'complete') {
                            $prgress.hide().width(0);
                            $li.append('<span class="success"></span>');
                        }

                        $li.removeClass('state-' + prev).addClass('state-' + cur);
                    });

                    $li.on('mouseenter', function() {
                        $btns.stop().animate({
                            height: 30
                        });
                    });

                    $li.on('mouseleave', function() {
                        $btns.stop().animate({
                            height: 0
                        });
                    });

                    $btns.on('click', 'span', function() {
                        var index = $(this).index(),
                            deg;

                        switch (index) {
                            case 0:
                                uploader.removeFile(file);
                                return;

                            case 1:
                                file.rotation += 90;
                                break;

                            case 2:
                                file.rotation -= 90;
                                break;
                        }

                        if (supportTransition) {
                            deg = 'rotate(' + file.rotation + 'deg)';
                            $wrap.css({
                                '-webkit-transform': deg,
                                '-mos-transform': deg,
                                '-o-transform': deg,
                                'transform': deg
                            });
                        } else {
                            $wrap.css('filter', 'progid:DXImageTransform.Microsoft.BasicImage(rotation=' + (~~((file.rotation / 90) % 4 + 4) % 4) + ')');
                        }


                    });

                    $li.appendTo($queue);
                }

                // 负责view的销毁
                function removeFile(file) {
                    var $li = $('#' + file.id);

                    delete percentages[file.id];
                    updateTotalProgress();
                    $li.off().find('.file-panel').off().end().remove();
                }

                function updateTotalProgress() {
                    var loaded = 0,
                        total = 0,
                        spans = $progress.children(),
                        percent;

                    $.each(percentages, function(k, v) {
                        total += v[0];
                        loaded += v[0] * v[1];
                    });

                    percent = total ? loaded / total : 0;


                    spans.eq(0).text(Math.round(percent * 100) + '%');
                    spans.eq(1).css('width', Math.round(percent * 100) + '%');
                    updateStatus();
                }

                function updateStatus() {
                    var text = '',
                        stats;

                    if (state === 'ready') {
                        text = '选中' + fileCount + '个文件，共' +
                            WebUploader.formatSize(fileSize) + '。';
                    } else if (state === 'confirm') {
                        stats = uploader.getStats();
                        if (stats.uploadFailNum) {
                            text = '已成功上传' + stats.successNum + '个文件，' +
                                stats.uploadFailNum + '个失败，<a class="retry" href="#">重新上传</a><!--或<a class="ignore" href="#">忽略</a>-->'
                        }

                    } else {
                        stats = uploader.getStats();
                        text = '共' + fileCount + '张（' +
                            WebUploader.formatSize(fileSize) +
                            '），已上传' + stats.successNum + '张';

                        if (stats.uploadFailNum) {
                            text += '，失败' + stats.uploadFailNum + '张';
                        }
                    }

                    $info.html(text);
                }

                function setState(val) {
                    var file, stats;

                    if (val === state) {
                        return;
                    }

                    $upload.removeClass('state-' + state);
                    $upload.addClass('state-' + val);
                    state = val;

                    switch (state) {
                        case 'pedding':
                            $placeHolder.removeClass('element-invisible');
                            $queue.hide();
                            $statusBar.addClass('element-invisible');
                            uploader.refresh();
                            break;

                        case 'ready':
                            $placeHolder.addClass('element-invisible');
                            $('#filePicker2').removeClass('element-invisible');
                            $queue.show();
                            $statusBar.removeClass('element-invisible');
                            uploader.refresh();
                            break;

                        case 'uploading':
                            $('#filePicker2').addClass('element-invisible');
                            $progress.show();
                            $upload.text('暂停上传');
                            break;

                        case 'paused':
                            $progress.show();
                            $upload.text('继续上传');
                            break;

                        case 'confirm':
                            $progress.hide();
                            $('#filePicker2').removeClass('element-invisible');
                            $upload.text('开始上传');

                            stats = uploader.getStats();
                            if (stats.successNum && !stats.uploadFailNum) {
                                setState('finish');
                                return;
                            }
                            break;
                        case 'finish':
                            stats = uploader.getStats();
                            if (stats.successNum) {
                                // alert( '上传成功' );
                                $(".modal").modal("hide");
                            } else {
                                // 没有成功的图片，重设
                                state = 'done';
                                location.reload();
                            }
                            break;
                    }
                    updateStatus();
                }

                uploader.onUploadProgress = function(file, percentage) {
                    var $li = $('#' + file.id),
                        $percent = $li.find('.progress span');

                    $percent.css('width', percentage * 100 + '%');
                    percentages[file.id][1] = percentage;
                    updateTotalProgress();
                };

                // 上传成功后
                uploader.onUploadSuccess = function(file, response) {
                    if (response.status == 1) {
                        var filepath = response.file_info.file_path;
                        var title = response.file_info.name;


                        domInput.find(".file_path").val(filepath);
                        domInput.find(".file_title").val(title);
                        if (_this_upload_type == 'banner') {
                            _this_upload.html( "<div class='flie-box col-sm-3'><div class='file-img'><img style='border: 1px solid #c1c1c1;'  src='"+
                                response.file_info.file_path
                                +"' onerror='javascript:this.src=\"/Public/Common/img/default.png\" ' /></div>" +
                                "<div class='close-btn'><i class='fa fa-remove'></i></div><input name='post_banner' type='hidden' value='"+
                                JSON.stringify( response.file_info.file_path )
                                +"' /></div> " )
                        }


                    } else {
                        alert(response.info);
                    };

                };

                uploader.onFileQueued = function(file) {
                    fileCount++;
                    fileSize += file.size;

                    if (fileCount === 1) {
                        $placeHolder.addClass('element-invisible');
                        $statusBar.show();
                    }

                    addFile(file);
                    setState('ready');
                    updateTotalProgress();
                };

                uploader.onFileDequeued = function(file) {
                    fileCount--;
                    fileSize -= file.size;

                    if (!fileCount) {
                        setState('pedding');
                    }

                    removeFile(file);
                    updateTotalProgress();

                };

                uploader.on('all', function(type) {
                    var stats;
                    switch (type) {
                        case 'uploadFinished':
                            setState('confirm');
                            break;

                        case 'startUpload':
                            setState('uploading');
                            break;

                        case 'stopUpload':
                            setState('paused');
                            break;

                    }
                });

                uploader.onError = function(code) {
                    alert('Eroor: ' + code);
                };


                $info.on('click', '.retry', function() {
                    uploader.retry();
                });

                $info.on('click', '.ignore', function() {
                    alert('todo');
                });

                $upload.addClass('state-' + state);
                updateTotalProgress();


                $(".modal-uploader").on("shown.bs.modal", function() {
                    uploader.addButton({
                        id: '#filePicker',
                        innerHTML: '点击选择文件'
                    })
                });

                $(".modal-uploader").on("hide.bs.modal", function() {
                    $placeHolder.removeClass('element-invisible');
                    $(".filelist").html("");
                    fileCount = 0;
                    setState("pedding");
                    uploader.reset();
                });


            })
        })
    </script>


</body>
</html>