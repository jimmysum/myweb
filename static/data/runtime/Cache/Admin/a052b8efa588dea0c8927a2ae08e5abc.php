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
				<li class="current"><a href="<?php echo U('ad:index');?>">所有广告</a></li>
				<li ><a href="<?php echo U('ad:add');?>" >添加广告</a></li>
			</ul>
		</div>
		<div class="common-form">
			<form method="post" class="J_ajaxForm" action="#">
				<div class="table_list">
					<table width="100%">
						<thead>
							<tr>
								<td align='center'>ID</td>
								<td align='center'>广告名称</td>
								<td>调用代码</td>
								<td align='center'>操作</td>
							</tr>
						</thead>
						<tbody>
						<?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
								<td align='center'><?php echo ($vo["ad_id"]); ?></td>
								<td align='center'><?php echo ($vo["ad_name"]); ?></td>
								<td>{ :show_ad('<?php echo ($vo['ad_name']); ?>')}</td>
								<td align='center'>
									<a href="<?php echo U('ad/edit',array('id'=>$vo[ad_id]));?>" >修改</a>|
									<a href="<?php echo U('ad/delete',array('id'=>$vo[ad_id]));?>" class="J_ajax_del" >删除</a>
								</td>
							</tr><?php endforeach; endif; ?>
						</tbody>
					</table>
					<div class="p10"><div class="pages"><?php echo ($page); ?> </div> </div>
				</div>
			</form>
		</div>
	</div>

	<script src="/myweb/static/js/common.js<?php echo ($js_debug); ?>"></script> 
	
</body>
</html>