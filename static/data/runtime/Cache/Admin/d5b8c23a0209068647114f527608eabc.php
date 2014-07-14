<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>CXPHP系统后台</title>
		<link href='/myweb/static/favicon.ico' rel='shortcut icon'>
		<meta http-equiv="X-UA-Compatible" content="chrome=1,IE=edge" />
		<meta name="robots" content="noindex,nofollow">
		<link href="/myweb/static/admin/css/login.css<?php echo ($js_debug); ?>" rel="stylesheet" />
		<script type="text/javascript">
			if (window.parent !== window.self) {
				document.write = '';
				window.parent.location.href = window.self.location.href;
				setTimeout(function() {
					document.body.innerHTML = '';
				}, 0);
			}
		</script>
	</head>
	<body>
		<div class="wrap">
			<h1><a target="_blank" href="/myweb">CXPHP 后台管理中心</a></h1>
			<form method="post" name="login" action="<?php echo U('public/dologin');?>" autoComplete="off">
				<div class="login">
					<ul>
						<li>
							<input class="input" id="J_admin_name" required name="username" type="text" placeholder="帐号名" title="帐号名" />
						</li>
						<li>
							<input class="input" id="admin_pwd" type="password" required name="password" placeholder="密码" title="密码" />
						</li>
						<li id="J_verify_code" style='display:none'>
							<div>
								<?php echo show_verify_img('length=4&height=50&width=238&size=26');?>
							</div>
						</li>
						<li>
							<input class="input" onfocus="$('#J_verify_code').show().find('img').click()" type="text" name="verify" placeholder="请输入验证码" />
						</li>
					</ul>
					<button type="submit" name="submit" class="btn">登录</button>
				</div>
			</form>
		</div>

		<script>
			var GV = {
				DIMAUB: "/myweb/",
				JS_ROOT: "static/js/", //js版本号
				TOKEN: 'b28c8997adec2573'	//token ajax全局
			};
		</script>
		<script src="/myweb/static/js/wind.js"></script>
		<script src="/myweb/static/js/jquery.js"></script>
		<script type="text/javascript" src="/myweb/static/js/common.js<?php echo ($js_debug); ?>"></script>
		<script>
			;
			(function() {
				document.getElementById('J_admin_name').focus();
			})();
		</script>
	</body>
</html>