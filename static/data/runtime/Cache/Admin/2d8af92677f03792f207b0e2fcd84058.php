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
		<?php $getMenu = \Admin\Controller\AdminController::getMenu(); ?>
<?php if(!empty($getMenu)): ?><div class="nav">
		<ul class="cc">
			<?php if(is_array($getMenu)): $i = 0; $__LIST__ = $getMenu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$r): $mod = ($i % 2 );++$i; $current = ($r['action']==ACTION_NAME) ? 'current' : ''; ?>
				<li class='<?php echo ($current); ?>'>
					<a href="<?php echo U($r['app'].'/'.$r['model'].'/'.$r['action']);?>"><?php echo ($r["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div><?php endif; ?>
		<div class="h_a">角色信息</div>
		<form method="post" class="J_ajaxForm" action="<?php echo U(CONTROLLER_NAME.':'.ACTION_NAME);?>">
			<div class="table_full">
				<table width="100%">
					<tr>
						<th width="100">角色名称</th>
						<td><input type="text" name="name" value="<?php echo ($data["name"]); ?>" class="input" id="rolename"></input></td>
					</tr>
					<tr>
						<th>角色描述</th>
						<td><textarea name="remark" rows="2" cols="20" id="remark" class="inputtext" style="height:100px;width:500px;"><?php echo ($data["remark"]); ?></textarea></td>
					</tr>
					<tr>
						<th>是否启用</th>
						<td><input type="radio" name="status" value="1"  <?php if($data['status'] == 1): ?>checked<?php endif; ?>>启用<label>  &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="status" value="0" <?php if($data['status'] == 0): ?>checked<?php endif; ?>>禁止</label></td>
					</tr>
				</table>
				<input type="hidden" name="id" value="<?php echo ($data["id"]); ?>" />

			</div>
			<div class="">
				<div class="btn_wrap_pd">             
					<button class="btn btn_submit mr10 J_ajax_submit_btn" type="submit">提交</button>
				</div>
			</div>
		</form>
	</div>

	<script src="/myweb/static/js/common.js<?php echo ($js_debug); ?>"></script> 
	
</body>
</html>