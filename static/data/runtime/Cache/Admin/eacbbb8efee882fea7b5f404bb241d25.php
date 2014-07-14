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
		<div class="common-form">
			<form method="post" class="J_ajaxForm" action="#">
				<div class="table_list">
					<table width="100%">
						<thead>
							<tr>
								<td align='center'>ID</td>
								<td>用户名</td>
								<td>昵称</td>
								<td>E-mail</td>
								<td>角色名称</td>
								<td align='center'>操作</td>
							</tr>
						</thead>
						<tbody>
						<?php if(is_array($lists)): foreach($lists as $key=>$vo): ?><tr>
								<td align='center'><?php echo ($vo["ID"]); ?></td>
								<td><?php echo ($vo["user_login"]); ?></td>
								<td><?php echo ($vo["user_nicename"]); ?></td>
								<td><?php echo ($vo["user_email"]); ?></td>
								<!-- <td><?php echo date('Y-m-d H:i:s', $vo['create_time']);?></td> -->
								<td><?php echo ($vo["name"]); ?></td>
								<td align='center'>
									<a href="<?php echo U('user/delete',array('id'=>$vo['ID']));?>" class="J_ajax_del" >删除</a>
								</td>
							</tr><?php endforeach; endif; ?>
						</tbody>
					</table>
					<div class="p10"><div class="pages">  </div> </div>
				</div>
			</form>
		</div>
	</div>

	<script src="/myweb/static/js/common.js<?php echo ($js_debug); ?>"></script> 
	
</body>
</html>