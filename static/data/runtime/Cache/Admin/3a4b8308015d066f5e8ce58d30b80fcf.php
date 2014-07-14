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
	
	
	<div class="wrap J_check_wrap">
		<div class="nav">
			<ul class="cc">
				<li class="current"><a href="<?php echo U('menu:index');?>">后台菜单</a></li>
				<li><a href="<?php echo U('menu:add');?>">添加菜单</a></li>
			</ul>
		</div>
		<form class="J_ajaxForm" action="<?php echo U('menu:order');?>" method="post">
			<div class="table_list">
				<table width="100%">
					<colgroup>
						<col width="80">
						<col width="100">
						<col>
						<col width="80">
						<col width="200">
					</colgroup>
					<thead>
						<tr>
							<td>排序</td>
							<td>ID</td>
							<td>菜单名称</td>
							<td>状态</td>
							<td>管理操作</td>
						</tr>
					</thead>
					<?php echo ($categorys); ?>
				</table>
				<div class="p10"><div class="pages"> <?php echo ($page); ?> </div> </div>

			</div>
			<div class="btn_wrap">
				<div class="btn_wrap_pd">             
					<button class="btn btn_submit mr10 J_ajax_submit_btn" type="submit">排序</button>
				</div>
			</div>
		</form>
	</div>

	<script src="/myweb/static/js/common.js<?php echo ($js_debug); ?>"></script> 
	
</body>
</html>