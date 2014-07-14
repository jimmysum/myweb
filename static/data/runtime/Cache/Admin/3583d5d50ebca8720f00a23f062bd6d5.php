<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<!-- 加载标签库 -->
<!--->
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="chrome=1,IE=edge" />
		<title>系统后台</title>
		<link href='/myweb/static/favicon.ico' rel='shortcut icon'>
		<link href="/myweb/static/admin/css/style.css<?php echo ($js_debug); ?>" rel="stylesheet" />
		<link href="/myweb/static/js/artDialog/skins/default.css<?php echo ($js_debug); ?>" rel="stylesheet" />
		<script type="text/javascript">
			//全局变量
			var GV = {
				DIMAUB: "/myweb/",
				JS_ROOT: "static/js/",
				TOKEN: ""
			};
		</script>
		<script src="/myweb/static/js/wind.js<?php echo ($js_debug); ?>"></script>
		<script src="/myweb/static/js/jquery.js<?php echo ($js_debug); ?>"></script>
	</head>
	<body class="J_scroll_fixed">
	
	
	<div class="wrap">
		<div id="home_toptip"></div>
		<?php if(count($sms) > 0): ?><h2 class="h_a">系统通知</h2>
			<div class="home_info">
				<ul>
					<?php if(is_array($sms)): foreach($sms as $key=>$vo): ?><li> <em><?php echo ($vo["title"]); ?></em> <span><?php echo ($vo["content"]); ?></span> </li><?php endforeach; endif; ?>
				</ul>
			</div><?php endif; ?>
		<h2 class="h_a">系统信息</h2>
		<div class="home_info">
			<ul>
				<?php if(is_array($server_info)): $i = 0; $__LIST__ = $server_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li> <em><?php echo ($key); ?></em> <span><?php echo ($vo); ?></span> </li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
		<h2 class="h_a">发起团队</h2>
		<div class="home_info" id="home_devteam">
			<ul>
				<li> <em>CXPHP团队</em> <span>www.cxphp.cn</span> </li>
				<li> <em>团队成员</em> <span>Anyon.Zou</span> </li>
				<li> <em>联系邮箱</em> <span>cxphp@qq.com</span> </li>
			</ul>
		</div>
	</div>

	<script src="/myweb/static/js/common.js<?php echo ($js_debug); ?>"></script> 
	
</body>
</html>