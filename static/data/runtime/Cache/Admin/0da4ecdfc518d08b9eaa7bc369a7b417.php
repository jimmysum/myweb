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
		<div class="pop_nav">
			<ul class="J_tabs_nav">
				<li class="current"><a href="javascript:;;">网站信息</a></li>
				<li class=""><a href="javascript:;;">SEO设置</a></li>
				<li class=""><a href="javascript:;;">URL设置</a></li>
			</ul>
		</div>
		<form class="J_ajaxForms" name="myform" id="myform" action="<?php echo u('setting/site');?>" method="post">
			<div class="J_tabs_contents">
				<div>
					<div class="table_list">
						<table cellpadding="0" cellspacing="0" class="table_form" width="100%">
							<tbody>
								<tr>
									<td>网站名称：</td>
									<td>
										<input type="text" class="input" name="options[site_name]" value="<?php echo ($site_name); ?>"><span class="must_red">*</span>
										<!--<?php if(!empty($option_id)): ?>-->
										<input type="hidden" class="input" name="option_id" value="<?php echo ($option_id); ?>">
										<!--<?php endif; ?>-->
									</td>
								</tr>
								<tr>
									<td>网站域名：</td>
									<td><input type="text" class="input" name="options[site_host]" value="<?php echo ($site_host); ?>"><span class="must_red">*</span> &nbsp; &nbsp; 如：www.cxphp.cn</td>
								</tr>
								<tr>
									<td>模版方案：</td>
									<td>
										<select name="options[site_tpl]">
											<!--<?php if(is_array($templates)): foreach($templates as $key=>$vo): ?>-->
											<!--<?php if(($vo) == $site_tpl): ?>-->
											<option value="<?php echo ($vo); ?>" selected><?php echo ($vo); ?></option>
											<!--<?php else: ?>-->
											<option value="<?php echo ($vo); ?>"><?php echo ($vo); ?></option>
											<!--<?php endif; ?>-->
											<!--<?php endforeach; endif; ?>-->
										</select>
									</td>
								</tr>
								<tr>
									<td>备案信息：</td>
									<td><input type="text" class="input" name="options[site_icp]" value="<?php echo ($site_icp); ?>"></td>
								</tr>
								<tr>
									<td>站长邮箱：</td>
									<td><input type="text" class="input" name="options[site_admin_email]" value="<?php echo ($site_admin_email); ?>"></td>
								</tr>

								<tr>
									<td>统计代码：</td>
									<td><textarea name="options[site_tongji]" rows="5" cols="57"><?php echo ($site_tongji); ?></textarea></td>
								</tr>
								<tr>
									<td>版权信息：</td>
									<td><textarea name=options[site_copyright] rows="5" cols="57"><?php echo ($site_copyright); ?></textarea></td>
								</tr>
							</tbody>
						</table>
					</div>


				</div>
				<div style="display: none">
					<div class="table_list">
						<table cellpadding="0" cellspacing="0" class="table_form"
							   width="100%">
							<tbody>
								<tr>
									<td>SEO标题:</td>
									<td><input type="text" class="input" name="options[site_seo_title]" value="<?php echo ($site_seo_title); ?>"></td>
								</tr>
								<tr>
									<td>SEO关键字:</td>
									<td><input type="text" class="input" name="options[site_seo_keywords]" value="<?php echo ($site_seo_keywords); ?>"></td>
								</tr>
								<tr>
									<td>SEO描述:</td>
									<td><textarea name="options[site_seo_description]" rows="5" cols="57"><?php echo ($site_seo_description); ?></textarea></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div style="display: none">
					<div class="table_list">
						<table cellpadding="0" cellspacing="0" class="table_form" width="100%">
							<tbody>
								<tr>
									<td>url模式：</td>
									<td>
										<select name="options[urlmode]">
											<!--<?php if(is_array($urlmodes)): foreach($urlmodes as $key=>$vo): ?>-->
											<!--<?php if(($key) == $urlmode): ?>-->
											<option value="<?php echo ($key); ?>" selected><?php echo ($vo); ?></option>
											<!--<?php else: ?>-->
											<option value="<?php echo ($key); ?>"><?php echo ($vo); ?></option>
											<!--<?php endif; ?>-->
											<!--<?php endforeach; endif; ?>-->
										</select>
										<span class="must_red">*&nbsp;&nbsp;如果你开启的是REWRITE模式，请确保服务器支持REWRITE；</span>
									</td>
								</tr>
								<tr>
									<td>URL伪静态后缀：</td>
									<td><input type="text" class="input" name="options[html_suffix]" value="<?php echo ((isset($html_suffix) && ($html_suffix !== ""))?($html_suffix):'.html'); ?>"><span class="must_red">*&nbsp;&nbsp;如果设置则开启URL伪静态；</span></td>
								</tr>
							</tbody>
						</table>
					</div>


				</div>
			</div>
			<div class="btn_wrap">
				<div class="btn_wrap_pd">
					<button class="btn btn_submit mr10 J_ajax_submit_btn" type="submit">提交</button>
				</div>
			</div>
		</form>
	</div>

	<script src="/myweb/static/js/common.js<?php echo ($js_debug); ?>"></script> 
	
	<script>
		Wind.use('validate', 'ajaxForm', 'artDialog', function() {
			//javascript
			var form = $('form.J_ajaxForms');
			//ie处理placeholder提交问题
			if ($.browser.msie) {
				form.find('[placeholder]').each(function() {
					var input = $(this);
					if (input.val() == input.attr('placeholder')) {
						input.val('');
					}
				});
			}
			//表单验证开始
			form.validate({
				//是否在获取焦点时验证
				onfocusout: false,
				//是否在敲击键盘时验证
				onkeyup: false,
				//当鼠标掉级时验证
				onclick: false,
				//验证错误
				showErrors: function(errorMap, errorArr) {
					//errorMap {'name':'错误信息'}
					//errorArr [{'message':'错误信息',element:({})}]
					try {
						$(errorArr[0].element).focus();
						art.dialog({
							id: 'error',
							icon: 'error',
							lock: true,
							fixed: true,
							background: "#CCCCCC",
							opacity: 0,
							content: errorArr[0].message,
							cancelVal: '确定',
							cancel: function() {
								$(errorArr[0].element).focus();
							}
						});
					} catch (err) {
					}
				},
				//验证规则
				rules: {'options[site_name]': {required: 1}, 'options[site_host]': {required: 1}, 'options[site_root]': {required: 1}},
				//验证未通过提示消息
				messages: {'options[site_name]': {required: '请输入网站名称！'}, 'options[site_host]': {required: '请输入网站域名！'}, 'options[site_root]': {required: '请输入安装路径！'}},
				//给未通过验证的元素加效果,闪烁等
				highlight: false,
				//是否在获取焦点时验证
				onfocusout: false,
						//验证通过，提交表单
						submitHandler: function(forms) {
							$(forms).ajaxSubmit({
								url: form.attr('action'), //按钮上是否自定义提交地址(多按钮情况)
								dataType: 'json',
								beforeSubmit: function(arr, $form, options) {

								},
								success: function(data, statusText, xhr, $form) {
									if (data.status) {
										setCookie("refersh_time", 1);
										//添加成功
										Wind.use("artDialog", function() {
											art.dialog({
												id: "succeed",
												icon: "succeed",
												fixed: true,
												lock: true,
												background: "#CCCCCC",
												opacity: 0,
												content: data.info,
												button: [
													{
														name: '确定',
														callback: function() {
															return true;
														},
														focus: true
													}, {
														name: '关闭',
														callback: function() {
															return true;
														}
													}
												]
											});
										});
									} else {
										isalert(data.info);
									}
								}
							});
						}
			});
		});
	</script>

</body>
</html>