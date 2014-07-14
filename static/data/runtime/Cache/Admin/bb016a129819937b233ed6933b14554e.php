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
		<div class="nav">
			<ul class="cc">
				<li class="current"><a href="<?php echo U('link/index');?>">友情链接</a></li>
				<li ><a href="<?php echo U('link/add');?>" >添加链接</a></li>
			</ul>
		</div>
		<div class="common-form">
			<form method="post" class="J_ajaxForm" action="<?php echo U('link:order');?>">
				<div class="table_list">
					<table width="100%">
						<thead>
							<tr>
								<td >排序</td>
								<td align='center'>ID</td>
								<td align='center'>链接名称</td>
								<td>链接地址</td>
								<td>打开方式</td>
								<td align='center'>操作</td>
							</tr>
						</thead>
						<tbody>
						<?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
								<td>
									<input name='listorder[<?php echo ($vo["link_id"]); ?>]' class="input mr5"  type='text' size='3' value='<?php echo ($vo["listorder"]); ?>'></td>
								<td align='center'><?php echo ($vo["link_id"]); ?></td>
								<td align='center'><?php echo ($vo["link_name"]); ?></td>
								<td><a href="<?php echo ($vo["link_url"]); ?>" target="_blank"><?php echo ($vo["link_url"]); ?></a></td>
								<td><?php echo ($vo["link_target"]); ?></td>
								<td align='center'>
									<a href="<?php echo U('link/edit',array('id'=>$vo[link_id]));?>" >修改</a>|
									<a href="<?php echo U('link/delete',array('id'=>$vo[link_id]));?>" class="J_ajax_del" >删除</a>
								</td>
							</tr><?php endforeach; endif; ?>
						</tbody>
					</table>
					<div class="btn_wrap">
						<div class="btn_wrap_pd">
							<button class="btn btn_submit mr10 J_ajax_submit_btn" type="submit">排序</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>

	<script src="/myweb/static/js/common.js<?php echo ($js_debug); ?>"></script> 
	
</body>
</html>