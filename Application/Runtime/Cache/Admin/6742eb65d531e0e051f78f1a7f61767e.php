<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>my_project</title>

	<!-- Css Files  -->
	<link rel="stylesheet" href="/Public/Admin/css/base.css">
	<link rel="stylesheet" href="/Public/Admin/css/bootstrap.css">
	<!-- <link rel="stylesheet" href="/Public/Admin/css/font-awesome.min.css"> -->
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

	<!-- 顶部引入其他CSS文件 -->
	
</head>
<body>
	

	<!-- 导航开始 -->
	
		<div id="top">
	<div id="left">
		<span id="title">后台管理</span>
	</div>
	<i id="top_icon" class="fa fa-align-justify fa-2x"></i>
</div>
	
	<!-- 导航结束 -->

	<!-- 侧边栏开始 -->
	
		<div id="navMenubox">
	<ul class="navMenu">
		<li> 
		    <a href="<?php echo U('User/user');?>" <?php if(CONTROLLER_NAME == 'User'): ?>class="active"<?php endif; ?> >
		        <i id="left_icon" class="fa fa-user"></i>
		        <span>个人中心</span>
		    </a> 
		</li>

	    <li>
	        <a href="javascript:;" <?php if(CONTROLLER_NAME == Index): ?>class="active"<?php endif; ?> > 
	            <i id="left_icon" class="fa fa-user"></i>
	            <span class="">主页</span> 
	            <span class="arrow"></span> 
	        </a>
	        <ul class="sub-menu"  <?php if(CONTROLLER_NAME == Index): ?>style="display: block;"<?php endif; ?>>
	            <li>
	            	<a href="<?php echo U('Index/index');?>" <?php if($_SERVER['PATH_INFO'] == 'Index/index'): ?>class="active"<?php endif; ?>>
	            		用户管理
	            	</a>
	            </li>
	            <li>
	            	<a href="<?php echo U('Index/role');?>" <?php if($_SERVER['PATH_INFO'] == 'Index/role'): ?>class="active"<?php endif; ?>>
	            		角色管理
	            	</a>
	            </li>
	            <li><a href="javascript:;">权限管理</a></li>
	            <li><a href="javascript:;">我的任务</a></li>
	            <li><a href="javascript:;">个人信息</a></li>
	        </ul>
	    </li>

	    <li>
	        <a href="javascript:;" <?php if(CONTROLLER_NAME == Web): ?>class="active"<?php endif; ?> > 
	            <i id="left_icon" class="fa fa-user"></i>
	            <span class="">网站管理</span> 
	            <span class="arrow"></span> 
	        </a>
	        <ul class="sub-menu"  <?php if(CONTROLLER_NAME == Web): ?>style="display: block;"<?php endif; ?>>
	            <li>
	            	<a href="<?php echo U('Web/web');?>" <?php if($_SERVER['PATH_INFO'] == 'Web/web'): ?>class="active"<?php endif; ?>>
	            		网站设置
	            	</a>
	            </li>
	        </ul>
	    </li>
	    
	    <li> 
	        <a href="javascript:;">
	            <i id="left_icon" class="fa fa-user"></i>
	            <span>文章管理</span>
	        </a> 
	    </li>

	    <li> 
	        <a href="javascript:;"> 
	            <i id="left_icon" class="fa fa-user"></i>
	            <span class="nav-text">系统管理</span> 
	            <span class="arrow"></span> 
	        </a>
	        <ul class="sub-menu">
	            <li><a href="javascript:;" >用户管理</a></li>
	            <li><a href="javascript:;">角色管理</a></li>
	            <li><a href="javascript:;">系统参数</a></li>
	        </ul>
	    </li>

	    <li> 
	        <a href="javascript:;"> 
	            <i id="left_icon" class="fa fa-user"></i>
	            <span class="nav-text">统计报表</span> 
	            <span class="arrow"></span> 
	        </a>
	        <ul class="sub-menu">
	            <li><a href="javascript:;" >发运表</a></li>
	            <li><a href="javascript:;">发运结算表</a></li>
	            <li><a href="javascript:;">自营车表</a></li>
	            <li><a href="javascript:;">导入发运报表</a></li>
	            <li><a href="javascript:;">打印</a></li>
	            <li><a href="javascript:;">数据查询</a></li>
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
            <h1>网站设置页面内容</h1> 
            <a href="<?php echo U('Index/index');?>" title="">我我我我我我我我我我</a>
        </div>
    </div>


		
			
		
	</div>

<!-- jQuery -->
<script type="text/javascript" src="/Public/Admin/js/jquery-3.3.1.js"></script>
<!-- Bootstrap -->
<script type="text/javascript" src="/Public/Admin/js/bootstrap.js"></script>

<script type="text/javascript" src="/Public/Admin/js/base.js"></script>

</body>
</html>