<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="expires" content="0">

	<title>倚楼听花落</title>
	<link rel="icon" href="/Public/Admin/login/images/favicon.ico" type="image/x-icon"/>
	<link rel="shortcut icon" href="/Public/Admin/login/images/favicon.ico" type="image/x-icon"/>
	<link href="/Public/Admin/login/css/default.css" rel="stylesheet" type="text/css" />
	<!--必要样式-->
	<link href="/Public/Admin/login/css/styles.css" rel="stylesheet" type="text/css" />
	<link href="/Public/Admin/login/css/demo.css" rel="stylesheet" type="text/css" />
	<link href="/Public/Admin/login/css/loaders.css" rel="stylesheet" type="text/css" />
	<link href="/Public/Admin/login/layui/css/layui.css" rel="stylesheet" type="text/css" />

</head>
<body>
<div class='login'>
	<form action="">
		<div class='login_title'>
			<span>管理员登录</span>
		</div>
		<div class='login_fields'>
			<div class='login_fields__user'>
				<div class='icon'>

					<img alt="" src='/Public/Admin/login/img/user_icon_copy.png'>
				</div>
				<input name="login" id="username" placeholder='用户名' maxlength="16" class="username" type='text' autocomplete="off"/>
				<div class='validation'>
					<img alt="" src='/Public/Admin/login/img/tick.png'>
				</div>
			</div>
			<div class='login_fields__password'>
				<div class='icon'>
					<img alt="" src='/Public/Admin/login/img/lock_icon_copy.png'>
				</div>
				<input name="pwd" id="password" class="passwordNumder" placeholder='密码' maxlength="16" type='text' autocomplete="off">
				<div class='validation'>
					<img alt="" src='/Public/Admin/login/img/tick.png'>
				</div>
			</div>
			<div class='login_fields__password'>
				<div class='icon'>
					<img alt="" src='/Public/Admin/login/img/key.png'>
				</div>
				<input name="code" id="code" placeholder='验证码' maxlength="4"  class="ValidateNum" type='text' name="ValidateNum" autocomplete="off">
				<div class='validation' style="opacity: 1; right: -5px;top: -3px;">
					<canvas class="J_codeimg" id="myCanvas" onclick="Code();">对不起，您的浏览器不支持canvas，请下载最新版浏览器!</canvas>
				</div>
			</div>
			<div class='login_fields__submit'>
				<input type='button' id="login" value='登录'>
			</div>
		</div>
		<div class='success'>
		</div>
		<div class='disclaimer'>
			<p>欢迎登陆后台管理</p>
		</div>
	</form>
</div>
<div class='authent'>
	<div class="loader" style="height: 60px;width: 60px;margin-left: 28px;margin-top: 40px">
		<div class="loader-inner ball-clip-rotate-multiple">
			<div></div>
			<div></div>
			<div></div>
		</div>
	</div>
	<p>认证中...</p>
</div>
<div class="OverWindows"></div>
<script src="/Public/Admin/base/js/jquery-3.3.1.js"></script>
<!--<script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script>-->
<script src="/Public/Admin/login/js/jquery-ui.min.js" type="text/javascript" ></script>
<script src='/Public/Admin/login/js/stopExecutionOnTimeout.js?t=1' type="text/javascript"></script>
<script src="/Public/Admin/login/layui/layui.js" type="text/javascript"></script>
<script src="/Public/Admin/login/js/Particleground.js" type="text/javascript"></script>
<script src="/Public/Admin/login/js/Treatment.js" type="text/javascript"></script>
<script src="/Public/Admin/login/js/jquery.mockjax.js" type="text/javascript"></script>
<script src="/Public/Admin/login/js/controlLogin.js" type="text/javascript"></script>
<script>
    $('#login').click(function () {
        var login = $('.username').val();
        var pwd = $('.passwordNumder').val();
        var code = $('.ValidateNum').val();
        var AdminCode = getCookieValue("AdminCode");
        var code_input = code.toUpperCase();
        var code_admin = AdminCode.toUpperCase();

        $.ajax({
            url: "<?php echo U('Login/ajax_login');?>",
            type: 'post',
            dataType: 'json',
            data:{
                account:login,
                password:pwd,
                code_input:code_input,
                code_admin:code_admin,
            },
            success:function (data) {
                console.log(data);

                if(data.res == 0){
                    alert(data.msg);
                }else{
                    var turl = "<?php echo U('Index/index');?>";
                    location.href = turl;
                }
            }
        })

        /*$.post(url, {account:login, password:pwd, code_input:code_input, code_admin:code_admin}, function(res) {
            console.log(res);
            if (res.status == 0) {
                alert(res.info);
            } else{
                alert(res.info);
                var turl = "<?php echo U('Index/index');?>";
                location.href = turl;
            };
        },'json');*/
    })
</script>
</body>
</html>