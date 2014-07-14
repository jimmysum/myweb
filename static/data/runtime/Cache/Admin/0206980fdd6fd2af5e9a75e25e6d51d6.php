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
	
	<style>
		.pop_nav {padding: 0px;}
		.pop_nav ul {border-bottom: 1px solid #266AAE;padding: 0 5px;height: 25px;clear: both;}
		.pop_nav ul li.current a {border: 1px solid #266AAE;border-bottom: 0 none;color: #333;font-weight: 700;background: #F3F3F3;position: relative;border-radius: 2px;margin-bottom: -1px;}
	</style>

	
	<div class="wrap J_check_wrap">
		<div class="pop_nav">
			<ul class="J_tabs_nav">
				<li class="current"><a href="javascript:void(0);">基本属性</a></li>
				<li class=""><a href="javascript:void(0);">SEO设置</a></li>
				<li class=""><a href="javascript:void(0);">模板设置</a></li>
			</ul>
		</div>
		<form class="J_ajaxForm" name="myform" id="myform" action="<?php echo U(CONTROLLER_NAME.':'.ACTION_NAME);?>" method="post">
			<input type="hidden" name="term_id" value="<?php echo ($data["term_id"]); ?>" />
			<div class="J_tabs_contents">
				<div>
					<div class="table_list">
						<table cellpadding="0" cellspacing="0" class="table_form"
							   width="100%">
							<tbody>
								<tr>
									<td width="140">上级:</td>
									<td><select name="parent">
											<option value="0">作为一级菜单</option>
											<?php if(is_array($terms)): foreach($terms as $key=>$vo): $selected=$data['parent']==$vo['term_id']?"selected":"" ?>
												<option value="<?php echo ($vo["term_id"]); ?>" <?php echo ($selected); ?>><?php echo ($vo["spacer"]); echo ($vo["name"]); ?></option><?php endforeach; endif; ?>
										</select></td>
								</tr>
								<tr>
									<td>名称:</td>
									<td><input type="text" class="input" name="name" value="<?php echo ($data["name"]); ?>"><span class="must_red">*</span></td>
								</tr>
								<tr>
									<td>描述:</td>
									<td><textarea name="description" rows="5" cols="57"><?php echo ($data["description"]); ?></textarea></td>
								</tr>
								<tr>
									<td>类型:</td>
									<td><select name="taxonomy">
											<?php if(is_array($taxonomys)): foreach($taxonomys as $key=>$vo): $selected=$data['taxonomy']==$key?"selected":"" ?>
												<option value="<?php echo ($key); ?>" <?php echo ($selected); ?>><?php echo ($vo); ?></option><?php endforeach; endif; ?>
										</select></td>
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
									<td><input type="text" class="input" name="seo_title" value="<?php echo ($data["seo_title"]); ?>"></td>
								</tr>
								<tr>
									<td>SEO关键字:</td>
									<td><input type="text" class="input" name="seo_keywords" value="<?php echo ($data["seo_keywords"]); ?>"></td>
								</tr>
								<tr>
									<td>SEO描述:</td>
									<td><textarea name="seo_description" rows="5" cols="57"><?php echo ($data["seo_description"]); ?></textarea></td>
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
									<td>列表页模板:</td>
									<td>
										<select name='list_tpl'>
											<!--<?php if(is_array($list_tpls)): $i = 0; $__LIST__ = $list_tpls;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tpl): $mod = ($i % 2 );++$i;?>-->
											<option value='<?php echo ($tpl); ?>' <?php if(($data["list_tpl"]) == $tpl): ?>selected<?php endif; ?>><?php echo ($tpl); ?></option>
											<!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
										</select>
									</td>
								</tr>
								<tr>
									<td>单内容模板:</td>
									<td>
										<select name='one_tpl'>
											<!--<?php if(is_array($article_tpls)): $i = 0; $__LIST__ = $article_tpls;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tpl): $mod = ($i % 2 );++$i;?>-->
											<option value='<?php echo ($tpl); ?>' <?php if(($data["one_tpl"]) == $tpl): ?>selected<?php endif; ?>><?php echo ($tpl); ?></option>
											<!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
										</select>
									</td>
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
	
</body>
</html>