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
				<li class="current"><a href="<?php echo U('slidecat/index');?>">幻灯片分类 </a></li>
				<li><a href="<?php echo U('slidecat/add');?>">添加幻灯片分类 </a></li>
			</ul>
		</div>
		<div class="common-form">
			<form method="post" class="J_ajaxForm" action="<?php echo U('term/listorders');?>">
				<div class="table_list">
					<table width="100%">
						<thead>
							<tr>
								<td align='center'>ID</td>
								<td align='center'>分类名称</td>
								<td>分类标识</td>
								<td align='center'>描述</td>
								<td align='center'>操作</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td align='center'>0</td>
								<td align='center'>默认分类</td>
								<td></td>
								<td align='center'>默认分类</td>
								<td align='center'>不允许修改</td>
							</tr>
						<?php if(is_array($slidecats)): foreach($slidecats as $key=>$vo): ?><tr>
								<td align='center'><?php echo ($vo["cid"]); ?></td>
								<td align='center'><?php echo ($vo["cat_name"]); ?></td>
								<td><?php echo ($vo["cat_idname"]); ?></td>
								<td align='center'><?php echo ($vo["cat_remark"]); ?></td>
								<td align='center'>
									<a href="<?php echo U('slidecat/edit',array('id'=>$vo[cid]));?>" >修改</a>|
									<a href="<?php echo U('slidecat/delete',array('id'=>$vo[cid]));?>" class="J_ajax_del" >删除</a>
								</td>
							</tr><?php endforeach; endif; ?>
						</tbody>
					</table>
					<!--     <div class="btn_wrap"> -->
					<!--       <div class="btn_wrap_pd"> -->
					<!--         <button class="btn btn_submit mr10 J_ajax_submit_btn" type="submit">排序</button> -->
					<!--       </div> -->
					<!--     </div> -->
				</div>
			</form>
		</div>
	</div>

	<script src="/myweb/static/js/common.js<?php echo ($js_debug); ?>"></script> 
	
</body>
</html>