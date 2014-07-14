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
								<td>来源</td>
								<td>用户名</td>
								<td>头像</td>
								<td>绑定账号</td>
								<td>首次登录时间</td>
								<td>最后登录时间</td>
								<td>最后登录IP</td>
								<td>登录次数</td>
								<td align='center'>操作</td>
							</tr>
						</thead>
						<tbody>
						<?php if(is_array($lists)): foreach($lists as $key=>$vo): ?><tr>
								<td align='center'><?php echo ($vo["ID"]); ?></td>
								<td><?php echo ($vo["_from"]); ?></td>
								<td><?php echo ($vo["_name"]); ?></td>
								<td><img width="25" height="25" src="<?php echo ($vo["head_img"]); ?>" /></td>
								<td><?php echo ((isset($vo['lock_to_id']) && ($vo['lock_to_id'] !== ""))?($vo['lock_to_id']):'无'); ?></td>
								<td><?php echo date('Y-m-d H:i:s', $vo['create_time']);?></td>
								<td><?php echo date('Y-m-d H:i:s', $vo['last_login_time']);?></td>
								<td><?php echo ($vo["last_login_ip"]); ?></td>
								<td><?php echo ($vo["login_times"]); ?></td>
								<td align='center'>
									<a href="<?php echo U('oauthadmin/delete',array('id'=>$vo['ID']));?>" class="J_ajax_del" >删除</a>
								</td>
							</tr><?php endforeach; endif; ?>
						</tbody>
					</table>
				</div>
			</form>
		</div>
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
					art.dialog.open("<?php echo u('post/move');?>&ids=" + id, {
						title: "批量移动"
					});
				});
			});
		});

		function view_comment(obj) {
			Wind.use('artDialog', 'iframeTools', function() {
				art.dialog.open($(obj).attr("data-url"), {
					close: function() {
						$(obj).focus();
					},
					title: $(obj).attr("data-title"),
					width: "800px",
					height: '520px',
					id: "view_comment",
					lock: true,
					background: "#CCCCCC",
					opacity: 0
				});
			});
		}

		function pushs() {
			$("form").submit(function() {
				return false;
			});
			var str = 0;
			var id = tag = '';
			$("input[name='ids[]']").each(function() {
				if ($(this).attr('checked')) {
					str = 1;
					id += tag + $(this).val();
					tag = '|';
				}
			});
			if (str == 0) {
				art.dialog({
					id: 'error',
					icon: 'error',
					content: '您没有勾选信息，无法进行操作！',
					cancelVal: '关闭',
					cancel: true
				});
				return false;
			}
			Wind.use('artDialog', 'iframeTools', function() {
				art.dialog.open("http://tcms.im/index.php?g=Contents&m=Content&a=push&action=position_list&modelid=2&catid=9&id=" + id, {
					title: "信息推送"
				});
			});
		}
	</script>

</body>
</html>