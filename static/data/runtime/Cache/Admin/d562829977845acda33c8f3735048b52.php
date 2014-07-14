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
		.pop_nav {
			padding: 0px;
		}

		.pop_nav ul {
			border-bottom: 1px solid #266AAE;
			padding: 0 5px;
			height: 25px;
			clear: both;
		}

		.pop_nav ul li.current a {
			border: 1px solid #266AAE;
			border-bottom: 0 none;
			color: #333;
			font-weight: 700;
			background: #F3F3F3;
			position: relative;
			border-radius: 2px;
			margin-bottom: -1px;
		}
	</style>

	
	<div class="wrap J_check_wrap">
		<div class="pop_nav">
			<ul class="J_tabs_nav">
				<li class="current"><a href="javascript:;;">第三方登录</a></li>
				<li class=""><a href="javascript:;;">微信参数</a></li>
				<!--<li class=""><a href="javascript:;;">模板设置</a></li>-->
			</ul>
		</div>
		<div class="common-form">
			<form method="post" class="J_ajaxForm" action="<?php echo u('api/setting');?>">
				<div class="J_tabs_contents">
					<div>
						<div class="table_list">
							<table width="100%">
								<thead>
									<tr>
										<td colspan="2">QQ互联登录设置</td>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td width="100">APPkey</td>
										<td><input type="text" class="input mr5" name="qq_key" value="<?php echo (C("THINK_SDK_QQ.APP_KEY")); ?>" /></td>
									</tr>
									<tr>
										<td>APPsecret</td>
										<td><input type="text" class="input mr5" name="qq_sec" value="<?php echo (C("THINK_SDK_QQ.APP_SECRET")); ?>" /></td>
									</tr>
									<tr>
										<td colspan="2"><a href="http://connect.qq.com/" target="_blank">点击此处</a>获取QQ互联APPKey及APPsecret</td>
									</tr>
								</tbody>
							</table>
							<table width="100%">
								<thead>
									<tr>
										<td colspan="2">新浪微博登录设置</td>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td width="100">APPkey</td>
										<td><input type="text" class="input mr5" name="sina_key" value="<?php echo (C("THINK_SDK_SINA.APP_KEY")); ?>" /></td>
									</tr>
									<tr>
										<td>APPsecret</td>
										<td><input type="text" class="input mr5" name="sina_sec" value="<?php echo (C("THINK_SDK_SINA.APP_SECRET")); ?>" /></td>
									</tr>
									<tr>
										<td colspan="2"><a href="http://open.weibo.com/" target="_blank">点击此处</a>获取新浪微博APPKey及APPsecret</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div style="display:none;">
						<div class="table_list">
							<table width="100%">
								<thead>
									<tr>
										<td colspan="2">微信接口配置</td>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td width="100">AppID</td>
										<td><input type="text" class="input mr5" name="wx_id" value="<?php echo (C("WECHAT_APPID")); ?>" /></td>
									</tr>
									<tr>
										<td>AppSecret</td>
										<td><input type="text" class="input mr5" name="wx_sec" value="<?php echo (C("WECHAT_APPSECRET")); ?>" /></td>
									</tr>
									<tr>
										<td>Token</td>
										<td>
											<input type="text" class="input mr5" name="wx_tok" value="<?php echo (C("WECHAT_TOKEN")); ?>" />
											<span>用作生成签名</span>
										</td>
									</tr>
									<tr>
										<td>关注成功自动回复</td>
										<td>
											<textarea rols="5" cols="57" name="wx_auto_reply"><?php echo (C("WECHAT_AUTO_REPLY")); ?></textarea>
										</td>
									</tr>
									<tr>
										<td>无效操作自动回复</td>
										<td>
											<textarea rols="5" cols="57" name="wx_auto_default"><?php echo (C("WECHAT_AUTO_DEFAULT")); ?></textarea>
										</td>
									</tr>
									<tr>
										<td colspan="2"><a href="http://mp.weixin.qq.com/" target="_blank">点击此处</a>获取微信AppID及AppSecret</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div>
					<div class="btn_wrap">
						<div class="btn_wrap_pd">
							<button class="btn btn_submit mr10 J_ajax_submit_btn" type="submit">提交</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>

	<script src="/myweb/static/js/common.js<?php echo ($js_debug); ?>"></script> 
	
</body>
</html>