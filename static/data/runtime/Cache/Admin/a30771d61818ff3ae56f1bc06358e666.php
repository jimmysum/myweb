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
				<li class="current"><a href="<?php echo U('slide/index');?>">所有幻灯片</a></li>
				<li ><a href="<?php echo U('slide/add');?>" >添加幻灯片</a></li>
			</ul>
		</div>
		<form method="post" id="cid_form"> 
			<div class="search_type cc mb10">
				<div class="mb10"> 
					<select class="select_2" name="cid"style="width:100px;" id="selected_cid">
						<option value=''>全部</option>
						<?php if(is_array($categorys)): foreach($categorys as $key=>$vo): $cid_select=$vo['cid']===$slide_cid?"selected":""; ?>
							<option value="<?php echo ($vo["cid"]); ?>" <?php echo ($cid_select); ?>><?php echo ($vo["cat_name"]); ?></option><?php endforeach; endif; ?>
					</select>
				</div>
			</div>
		</form>
		<form class="J_ajaxForm" action="" method="post">
			<div class="table_list">
				<table width="100%">
					<colgroup>
						<col width="36">
						<col width="40">
						<col width="80">
						<col width="80">
						<col width="80">
						<col width="90">
						<col width="140">
						<col width="120">
					</colgroup>
					<thead>
						<tr>
							<td><label><input type="checkbox" class="J_check_all" data-direction="x" data-checklist="J_check_x"></label></td>
							<td>排序</td>
							<td>ID</td>
							<td>标题</td>
							<td>描述</td>
							<td>操作</td>
						</tr>
					</thead>
					<?php if(is_array($slides)): foreach($slides as $key=>$vo): ?><tr>
							<td><input type="checkbox" class="J_check" data-yid="J_check_y" data-xid="J_check_x" name="ids[]" value="<?php echo ($vo["slide_id"]); ?>"></td>
							<td><input name='listorders[<?php echo ($vo["slide_id"]); ?>]' class="input mr5"  type='text' size='3' value='<?php echo ($vo["listorder"]); ?>'></td>
							<td><?php echo ($vo["slide_id"]); ?></td>
							<td><?php echo ($vo["slide_name"]); ?></td>
							<td><?php echo ($vo["slide_des"]); ?>dd</td>
							<td>
								<a href="<?php echo U('slide/edit',array('id'=>$vo[slide_id]));?>">修改</a>|
								<a href="<?php echo U('slide/delete',array('id'=>$vo[slide_id]));?>" class="J_ajax_del" >删除</a>
							</td>
						</tr><?php endforeach; endif; ?>
				</table>
				<div class="p10"><div class="pages">  </div> </div>

			</div>
			<div>
				<div class="btn_wrap_pd">
					<label class="mr20"><input type="checkbox" class="J_check_all" data-direction="y" data-checklist="J_check_y">全选</label>  
					<button class="btn J_ajax_submit_btn" type="submit" data-action="<?php echo u('slide/listorders');?>">排序</button>              
					<button class="btn J_ajax_submit_btn" type="submit" data-action="<?php echo U('slide/delete');?>">删除</button>
				</div>
			</div>
		</form>
	</div>

	<script src="/myweb/static/js/common.js<?php echo ($js_debug); ?>"></script> 
	
	<script>
		setCookie('refersh_time', 0);
		function refersh_window() {
			var refersh_time = getCookie('refersh_time');
			if (refersh_time == 1) {
				window.location.reload();
			}
		}
		setInterval(function() {
			refersh_window()
		}, 3000);
		$(function() {
			$("#selected_cid").change(function() {
				$("#cid_form").submit();
			});
		});

	</script>

</body>
</html>