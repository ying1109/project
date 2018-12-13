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

	    <!--<li>
	        <a href="javascript:;" <?php if(CONTROLLER_NAME == Poetry): ?>class="active"<?php endif; ?> >
	            <i class="fa fa-user"></i>
	            <span class="">诗词歌赋</span>
	            <span class="arrow"></span>
	        </a>
	        <ul class="sub-menu"  <?php if(CONTROLLER_NAME == Poetry): ?>style="display: block;"<?php endif; ?>>
	            <li>
					<a href="<?php echo U('Poetry/poem');?>" <?php if($url == 'Poetry/poem'): ?>class="active"<?php endif; ?>>诗</a>
				</li>
	            <li>
					<a href="<?php echo U('Poetry/ci');?>" <?php if($url == 'Poetry/ci'): ?>class="active"<?php endif; ?>>词</a>
				</li>
	            <li>
					<a href="<?php echo U('Poetry/song');?>" <?php if($url == 'Poetry/song'): ?>class="active"<?php endif; ?>>歌</a>
				</li>
	            <li>
					<a href="<?php echo U('Poetry/fu');?>" <?php if($url == 'Poetry/fu'): ?>class="active"<?php endif; ?>>赋</a>
				</li>
	        </ul>
	    </li>-->

	    <li>
	        <a href="javascript:;" <?php if(CONTROLLER_NAME == Auth): ?>class="active"<?php endif; ?> >
	            <i class="fa fa-user"></i>
	            <span class="">权限管理</span>
	            <span class="arrow"></span>
	        </a>
	        <ul class="sub-menu"  <?php if(CONTROLLER_NAME == Auth): ?>style="display: block;"<?php endif; ?>>
	            <li>
					<a href="<?php echo U('Auth/myAuth');?>" <?php if($url == 'Auth/myAuth'): ?>class="active"<?php endif; ?>>我的权限</a>
				</li>
	            <li>
					<a href="<?php echo U('Auth/admin');?>" <?php if($url == 'Auth/admin'): ?>class="active"<?php endif; ?>>管理员</a>
				</li>
	            <li>
					<a href="<?php echo U('Auth/module');?>" <?php if($url == 'Auth/module'): ?>class="active"<?php endif; ?>>模块管理</a>
				</li>
	            <li>
					<a href="<?php echo U('Auth/rule');?>" <?php if($url == 'Auth/rule'): ?>class="active"<?php endif; ?>>规则管理</a>
				</li>
	            <li>
					<a href="<?php echo U('Auth/resetPwd');?>" <?php if($url == 'Auth/resetPwd'): ?>class="active"<?php endif; ?>>安全设置</a>
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
				</li>
				<li>
					<a href="<?php echo U('System/banner');?>" <?php if($url == 'System/banner'): ?>class="active"<?php endif; ?>>轮播图</a>
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
                    <label class="col-sm-2 control-label">父级模块：</label>
                    <div class="col-sm-6">
                        <select class="form-control" name="pid">
                            <option value="0">顶级模块</option>
                            <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v["id"]); ?>" <?php if($v["id"] == $info['pid']): ?>selected<?php endif; ?>><?php if($v["name"] != ''): ?>&nbsp;-->&nbsp;<?php endif; echo ($v["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">模块名称：</label>
                    <div class="col-sm-6">
                        <input class="form-control" name="name" value="<?php echo ($info["name"]); ?>" required>
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


		
			
		
	</div>

<!-- jQuery -->
<script type="text/javascript" src="/Public/Admin/base/js/jquery-3.3.1.js"></script>
<!-- Bootstrap -->
<script type="text/javascript" src="/Public/Admin/base/js/bootstrap.js"></script>

<script type="text/javascript" src="/Public/Admin/base/js/base.js"></script>

<!--底部引入其他js文件-->


</body>
</html>