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
				<div class="h_a">菜单信息</div>
				<div class="table_list">
					<table cellpadding="0" cellspacing="0" class="table_form" width="100%">
						<input type="hidden" name="id" value="<?php echo ($id); ?>" />
						<tbody>
							<tr>
								<td width="140">上级:</td>
								<td>
									<select name="parentid">
										<option value="0">作为一级菜单</option>
										<?php echo ($select_categorys); ?>
									</select>
								</td>
							</tr>
							<tr>
								<td>名称:</td>
								<td><input type="text" class="input" name="name" value="<?php echo ($data["name"]); ?>"></td>
							</tr>
							<tr>
								<td>项目:</td>
								<td><input type="text" class="input" name="app" id="app" value="<?php echo ($data["app"]); ?>"></td>
							</tr>
							<tr>
								<td>模块:</td>
								<td><input type="text" class="input" name="model" id="model" value="<?php echo ($data["model"]); ?>"></td>
							</tr>
							<tr>
								<td>方法:</td>
								<td><input type="text" class="input" name="action" id="action" value="<?php echo ($data["action"]); ?>"></td>
							</tr>
							<tr>
								<td>参数:</td>
								<td><input type="text" class="input length_5" name="data" value="<?php echo ($data["data"]); ?>">
									例:g=admin&amp;m=menu&amp;a=add；外部链接以http://开头</td>
							</tr>
							<tr>
								<td>图标:</td>
								<td><input type="text" class="input" name="icon" id="action" value="<?php echo ($data["icon"]); ?>"></td>
							</tr>
							<tr>
								<td>备注:</td>
								<td><textarea name="remark" rows="5" cols="57"><?php echo ($data["remark"]); ?></textarea></td>
							</tr>
							<tr>
								<td>状态:</td>
								<td><select name="status">
										<option value="1" <?php if(($data["status"]) == "1"): ?>selected<?php endif; ?>>显示</option>
										<option value="0" <?php if(($data["status"]) == "0"): ?>selected<?php endif; ?>>不显示</option>
									</select></td>
							</tr>
							<tr>
								<td>类型:</td>
								<td><select name="type">
										<option value="1" <?php if(($data["type"]) == "1"): ?>selected<?php endif; ?>>权限认证+菜单</option>
										<option value="0" <?php if(($data["type"]) == "0"): ?>selected<?php endif; ?>>只作为菜单</option>
									</select>
									注意：“权限认证+菜单”表示加入后台权限管理，纯碎是菜单项请不要选择此项。</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="">
					<div class="btn_wrap_pd">
						<button class="btn btn_submit mr10 J_ajax_submit_btn" type="submit">保存</button>
						<input type="hidden" name="id" value="<?php echo ($data["id"]); ?>" />
					</div>
				</div>
			</form>
		</div>
	</div>

	<script src="/myweb/static/js/common.js<?php echo ($js_debug); ?>"></script> 
	
</body>
</html>