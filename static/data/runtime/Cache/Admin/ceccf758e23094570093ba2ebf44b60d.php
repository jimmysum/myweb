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
				<li class="current"><a href="javascript:;">所有内容</a></li>
				<li><a target="_self" href="<?php echo U('post/add',array('term'=>$term['term_id']));?>">添加内容</a></li>
			</ul>
		</div>
		<div class="h_a">搜索</div>
		<form  method="post">
			<div class="search_type cc mb10">
				<div class="mb10"> 
					<span class="mr20">分类：
						<select class="select_2" name="term">
							<option value='0' >全部</option>
							<?php echo ($taxonomys); ?>
						</select>
						&nbsp;&nbsp;时间：
						<input type="text" name="start_time" class="input length_2 J_date" value="<?php echo ($formget["start_time"]); ?>" style="width:80px;" autocomplete="off">-<input type="text" class="input length_2 J_date" name="end_time" value="<?php echo ($formget["end_time"]); ?>" style="width:80px;" autocomplete="off">
						&nbsp; &nbsp;关键字：
						<input type="text" class="input length_2" name="keyword" style="width:200px;" value="<?php echo ($formget["keyword"]); ?>" placeholder="请输入关键字...">
						<input type="submit" class="btn" value="搜索"/>
					</span>
				</div>
			</div>
		</form>
		<form class="J_ajaxForm" action="" method="post">
			<div class="table_list">
				<table id="asList" class="table table-bordered table-striped table-nowrap" cellpadding=0 cellspacing=0 ><thead><tr class="row" ><th width="8"><input type="checkbox" id="check" onclick="EU.list.checkAll('asList',undefined,'true')"></th><th data-field="ID"><a href="javascript:$.list.sortBy('ID','<?php echo ($sort); ?>','index')" title="按照ID<?php echo ($sortType); ?> ">ID<?php if(($order) == "ID"): ?><img src="/myweb/Public/img/<?php echo ($sortImg); ?>.gif" width="12" height="17" border="0" align="absmiddle"><?php endif; ?></a></th><th data-field="post_title"><a href="javascript:$.list.sortBy('post_title','<?php echo ($sort); ?>','index')" title="按照hrefsss<?php echo ($sortType); ?> ">hrefsss<?php if(($order) == "post_title"): ?><img src="/myweb/Public/img/<?php echo ($sortImg); ?>.gif" width="12" height="17" border="0" align="absmiddle"><?php endif; ?></a></th></tr></thead><tbody><?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$as): $mod = ($i % 2 );++$i;?><tr class="row" style=" color:<?php echo ($as["color"]); ?>;  background-color:<?php echo ($as["bgcolor"]); ?>; " data-status="<?php echo ($as["status"]); ?>" data-tips="<?php echo ($as["tips"]); ?>" data-as_no="<?php echo ($as["as_no"]); ?>"><td ><input type="checkbox" name="true"	value="<?php echo ($as["job_id"]); ?>"></td><td style='text-align:center;'><?php echo ($as["ID"]); ?></td><td style='text-align:center;'><a href="javascript:void(0);" onclick="hrefsss('<?php echo (addslashes($as["job_id"])); ?>')"><?php echo ($as["post_title"]); ?></a></td></tr><?php endforeach; endif; else: echo "" ;endif; ?></tbody></table>

				<table width="100%">
					<colgroup>
						<col width="16">
						<col width="50">
						<col width="40">
						<col width="">
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
							<td>点击量</td>
							<td>发布人</td>
							<td><span>发布时间</span></td>
							<td>状态</td>
							<td>操作</td>
						</tr>
					</thead>
					<?php $status=array("1"=>"已审核","0"=>"未审核"); ?>
					<?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
							<td><input type="checkbox" class="J_check" data-yid="J_check_y" data-xid="J_check_x" name="ids[]" value="<?php echo ($vo["tid"]); ?>" ></td>
							<td><input name='listorders[<?php echo ($vo["tid"]); ?>]' class="input mr5"  type='text' size='3' value='<?php echo ($vo["listorder"]); ?>'></td>
							<td><a><?php echo ($vo["tid"]); ?></a></td>
							<td>
								<a href="<?php echo U('home/article/index',array('id'=>$vo['tid']));?>" target="_blank">
									<span style="" ><?php echo ($vo["post_title"]); ?></span>
								</a>
							</td>
							<td>0</td>
							<td>admin</td>
							<td><?php echo ($vo["post_date"]); ?></td>
							<td><?php echo ($status[$vo['post_status']]); ?></td>
							<td>
								<a target="_self" href="<?php echo U('post/edit',array('term'=>$term['term_id'],'id'=>$vo[ID]));?>" target="_blank" >修改</a>|
								<a href="<?php echo U('post/delete',array('term'=>$term['term_id'],'tid'=>$vo[tid]));?>" class="J_ajax_del" >删除</a>
							</td>
						</tr><?php endforeach; endif; ?>
				</table>
				<div class="p10"><div class="pages"> <?php echo ($page); ?> </div> </div>

			</div>
			<div>
				<div class="btn_wrap_pd">
					<label class="mr20"><input type="checkbox" class="J_check_all" data-direction="y" data-checklist="J_check_y">全选</label>                
					<button class="btn J_ajax_submit_btn" type="submit" data-action="<?php echo u('post/listorders');?>">排序</button>
					<button class="btn J_ajax_submit_btn" type="submit" data-action="<?php echo u('post/check',array('check'=>1));?>" data-subcheck="true" >审核</button>
					<button class="btn J_ajax_submit_btn" type="submit" data-action="<?php echo u('post/check',array('uncheck'=>1));?>" data-subcheck="true" >取消审核</button>
					<button class="btn J_ajax_submit_btn" type="submit" data-action="<?php echo u('post/delete');?>" data-subcheck="true" data-msg="你确定删除吗？">删除</button>
					<button class="btn" type="button" id="J_Content_remove">批量移动</button>
				</div>
			</div>
		</form>
	</div>

	<script src="/myweb/static/js/common.js<?php echo ($js_debug); ?>"></script> 
	
	<script>

		function refersh_window() {
			var refersh_time = getCookie('refersh_time');
			if (refersh_time == 1) {
				window.location.reload();
			}
		}
		setInterval(function() {
			refersh_window();
		}, 2000);
		$(function() {
			setCookie("refersh_time", 0);
			Wind.use('ajaxForm', 'artDialog', 'iframeTools', function() {
				//批量移动
				$('#J_Content_remove').click(function(e) {
					var str = 0;
					var id = tag = '';
					$("input[name='ids[]']").each(function() {
						if ($(this).attr('checked')) {
							str = 1;
							id += tag + $(this).val();
							tag = ',';
						}
					});
					if (str == 0) {
						art.dialog.through({
							id: 'error',
							icon: 'error',
							content: '您没有勾选信息，无法进行操作！',
							cancelVal: '关闭',
							cancel: true
						});
						return false;
					}
					var $this = $(this);
					art.dialog.open("/myweb/index.php?g=admin&m=post&a=move&ids=" + id, {
						title: "批量移动"
					});
				});
			});
		});


	</script>

</body>
</html>