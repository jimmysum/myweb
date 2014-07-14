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
				<li class="current"><a href="<?php echo U('rbac/index');?>">角色管理</a></li>
				<li ><a href="<?php echo U('rbac/roleadd');?>" >添加角色</a></li>
			</ul>
		</div>
		<div class="table_list">
			<form name="myform" action="<?php echo U('Rbac/listorders');?>" method="post">
				<table width="100%" cellspacing="0">
					<thead>
						<tr>
							<td width="20">ID</td>
							<td width="200"  align="left" >角色名称</td>
							<td align="left" >角色描述</td>
							<td width="50"  align="left" >状态</td>
							<td width="300">管理操作</td>
						</tr>
					</thead>
					<tbody>
					<?php if(is_array($roles)): foreach($roles as $key=>$vo): ?><tr>
							<td width="10%" align="center"><?php echo ($vo["id"]); ?></td>
							<td width="15%"  ><?php echo ($vo["name"]); ?></td>
							<td ><?php echo ($vo["remark"]); ?></td>
							<td width="5%">
						<?php if($vo['status'] == 1): ?><font color="red">√</font>
							<?php else: ?>
							<font color="red">╳</font><?php endif; ?>
						</td>
						<td  class="text-c">
						<?php if($vo['id'] == 1): ?><font color="#cccccc">权限设置</font> | <a href="<?php echo U('rbac/member',array('id'=>$vo['id']));?>">成员管理</a> | <font color="#cccccc">修改</font> | <font color="#cccccc">删除</font>
							<?php else: ?>
							<a href="<?php echo U('Rbac/authorize',array('id'=>$vo['id']));?>">权限设置</a>  |<a href="<?php echo U('rbac/member',array('id'=>$vo['id']));?>">成员管理</a> | <a href="<?php echo U('Rbac/roleedit',array('id'=>$vo['id']));?>">修改</a> | <a class="J_ajax_del" href="<?php echo U('Rbac/roledelete',array('id'=>$vo['id']));?>">删除</a><?php endif; ?>
						</td>
						</tr><?php endforeach; endif; ?>
					</tbody>
				</table>
			</form>
		</div>
	</div>

	<script src="/myweb/static/js/common.js<?php echo ($js_debug); ?>"></script> 
	
</body>
</html>