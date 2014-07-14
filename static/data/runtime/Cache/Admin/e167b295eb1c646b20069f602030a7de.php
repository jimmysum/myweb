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
	
	
	<div class="wrap jj">
		<?php $getMenu = \Admin\Controller\AdminController::getMenu(); ?>
<?php if(!empty($getMenu)): ?><div class="nav">
		<ul class="cc">
			<?php if(is_array($getMenu)): $i = 0; $__LIST__ = $getMenu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$r): $mod = ($i % 2 );++$i; $current = ($r['action']==ACTION_NAME) ? 'current' : ''; ?>
				<li class='<?php echo ($current); ?>'>
					<a href="<?php echo U($r['app'].'/'.$r['model'].'/'.$r['action']);?>"><?php echo ($r["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div><?php endif; ?>
		<div class="common-form">
			<form method="post" class="J_ajaxForm" action="<?php echo U(CONTROLLER_NAME.':'.ACTION_NAME);?>">
				<div class="h_a">分类信息</div>
				<div class="table_list">
					<table cellpadding="0" cellspacing="0" class="table_form" width="100%">
						<tbody>
							<tr>
								<td>分类名称:</td>
								<td>
									<input type="hidden" name="navcid" value="<?php echo ($navcid); ?>">
									<input type="text" class="input" name="name" value="<?php echo ($name); ?>"><span class="must_red">*</span>
								</td>
							</tr>
							<tr>
								<td>备注:</td>
								<td><textarea name="remark" rows="5" cols="57"><?php echo ($remark); ?></textarea></td>
							</tr>
							<tr>
								<td>主菜单:</td>
								<td>
						<?php $mainmenu_checked=$active?"checked":""; ?>
						<input type="checkbox" name="active" value="1" <?php echo ($mainmenu_checked); ?>>
						</td>
						</tr>
						</tbody>
					</table>
				</div>
				<div class="">
					<div class="btn_wrap_pd">
						<button class="btn btn_submit mr10 J_ajax_submit_btn" type="submit">保存</button>
					</div>
				</div>
			</form>
		</div>
	</div>

	<script src="/myweb/static/js/common.js<?php echo ($js_debug); ?>"></script> 
	
</body>
</html>