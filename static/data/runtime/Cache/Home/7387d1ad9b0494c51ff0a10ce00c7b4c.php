<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title><?php echo ($site_name); ?></title>
		<link href='__STATIC__/favicon.ico' rel='shortcut icon'>
		<meta name="keywords" content="<?php echo ($site_seo_keywords); ?>" />
		<meta name="description" content="<?php echo ($site_seo_description); ?>"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!-- Required -->
<link href="/myweb/Home/default/resource/assets/bootstrap/css/bootstrap.min.css"  rel="stylesheet" type="text/css" media="screen">
<link href="/myweb/Home/default/resource/font-awesome/css/font-awesome-4.0.3.css"  rel="stylesheet" type="text/css" media="screen">
<link href="/myweb/Home/default/resource/assets/fancybox/jquery.fancybox.css-v=2.1.5.css"  rel="stylesheet" type="text/css" media="screen">
<link href="/myweb/Home/default/resource/assets/animate/animate.css"  rel="stylesheet" type="text/css" media="screen">
<link href="/myweb/Home/default/resource/assets/easy-pie-chart/easypiechart.css"  rel="stylesheet" type="text/css" media="screen">
<link href="/myweb/Home/default/resource/assets/timeline/timeline.css"  rel="stylesheet" type="text/css" media="screen">

<link href="/myweb/Home/default/resource/css/global-style.css"  rel="stylesheet" type="text/css" media="screen">
<link rel="icon" href="/myweb/Home/default/resource/images/favicon.png" type="image/png">
<link href="/myweb/Home/default/resource/assets/fraction/fractionslider.css"  rel="stylesheet" type="text/css" media="screen">
<!--[if IE 7]>
<link href="/myweb/Home/default/resource/assets/bootstrap/css/bootstrap-ie7.css" rel="stylesheet" type="text/css" media="screen">
<link rel="stylesheet" href="/myweb/Home/default/resource/font-awesome/css/font-awesome-4.0.3-ie7.css">
<![endif]-->
    <!--[if IE 9]>
	<style>
		.slider-wrapper .slider .slide p{height:auto !important;}
        .top-header .top-header-menu > ul.menu > li.dropdown > a::after{display:none;}
	</style>
	<![endif]-->
</head>
<body>
	<div class="wrapper">
		<div id="asideMenu" class="aside-menu">
	<form class="form-inline form-search">
        <div class="input-group">
            <span class="input-group-btn">
                <button id="btnHideAsideMenu" class="btn btn-close" type="button" title="关闭"><i class="fa fa-times"></i></button>
            </span>
        </div>
    </form>
	<div class="nav">
		<?php $effected_id=""; $filetpl="<a href='\\\$href' target='\\\$target'>\\\$label</a>"; $foldertpl="<a href='\\\$href' target='\\\$target'>\\\$label</a>"; $ul_class="dropdown-menu" ; $li_class="" ; $style=""; $showlevel=6; $dropdown='dropdown'; echo sp_get_menu("main",$effected_id,$filetpl,$foldertpl,$ul_class,$li_class,$style,$showlevel,$dropdown); ?>
    </div>
</div>
<div class="top-header">
	<div class="container">
        <div class="row">
            <div class="col-sm-12">
				<span class="aux-text hidden-xs">
                    <a href="<?php echo U('home/index/index');?>"><?php echo C('site_name');?></a>
                </span>
				<div class="top-header-menu">
                    <ul class="menu">
						<!--<?php if(strlen($_SESSION['MEMBER_id']) != 0): ?>-->
						<li>
							<a href="<?php echo U('home/center/index');?>"><?php echo (session('MEMBER_name')); ?>
								<!--<?php if(getMesNum() != 0): ?>-->
								<span class="fa fa-envelope" style="color:#FF4400;"> <?php echo getMesNum();?></span>
								<!--<?php endif; ?>-->
							</a>
						</li>
						<li id="navright"><a href="<?php echo U('home/member/logout');?>"><span class="icon-signout"></span>退出</a></li>
						<!--<?php else: ?>-->
						<li><a href="<?php echo U('home/member/register');?>">注册</a></li>
						<li class="aux-languages dropdown"><a href="<?php echo U('home/member/index');?>"><span class="language name">登录</span></a>
							<ul id="auxLanguages" class="sub-menu">
								<li><a href="<?php echo U('home/member/index');?>"><span class="login" style="margin-left:2px;"><i class="fa fa-user"></i>&nbsp;&nbsp;本站账号</span></a></li>
								<li>
									<a href="<?php echo U('api/oauth/login',array('type'=>'qq'));?>">
										<span class="language"><img width="14" height="14" src="/myweb/Home/default/resource/images/qq.png" />&nbsp;&nbsp;QQ登录</span>
									</a>
								</li>
								<li><a href="<?php echo U('Api/oauth/login',array('type'=>'sina'));?>"><span class="language"><img width="14"  src="/myweb/Home/default/resource/images/weibo.png" />&nbsp;&nbsp;微博登录</span></a></li>
							</ul>
						</li>
						<!--<?php endif; ?>-->
                    </ul>
				</div>
            </div>
        </div>
    </div>
</div>
<!-- nav -->
<div>
    <div class="navbar navbar-white" role="navigation">
        <div class="container">
            <div class="navbar-header">
				<button type="button" class="navbar-toggle navbar-toggle-aside-menu">
                    <i class="fa fa-outdent icon-custom"></i>
                </button>
                <a class="navbar-brand" href="/myweb/" >
					<img src="/myweb/Home/default/resource/images/logo.png" height="45" alt="Logo">
                </a>
            </div>
            <div class="navbar-collapse collapse" id="main_nav">
				<?php $effected_id="menu-header"; $filetpl="<a href='\\\$href' target='\\\$target'>\\\$label</a>"; $foldertpl="<a class='dropdown-toggle' data-toggle='dropdown' data-hover='dropdown' data-close-others='true' href='\\$href' target='\\$target'>\\$label</a>"; $ul_class="dropdown-menu" ; $li_class="" ; $style="nav navbar-nav navbar-right"; $showlevel=6; $dropdown='dropdown'; echo sp_get_menu("main",$effected_id,$filetpl,$foldertpl,$ul_class,$li_class,$style,$showlevel,$dropdown); ?>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>
		<div class="slider-wrapper section">

			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
					<li data-target="#carousel-example-generic" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="item active">
						<img src="/myweb/Home/default/resource/images/carousel/carousel-img-3.png" />
						<div class="carousel-caption">
							<h3>体验新的CXPHP和BootStrap</h3>
							<p syle="text-align:left">
								自带会员中心
								更强大的前端菜单
								BootStrap前端布局
								URL路由+伪静态
							</p>
						</div>
					</div>
					<div class="item">
						<img src="/myweb/Home/default/resource/images/carousel/carousel-img-2.png" />
						<div class="carousel-caption">
							<h3>体验新的CXPHP和BootStrap</h3>
							<p syle="text-align:left">
								自带会员中心
								更强大的前端菜单
								BootStrap前端布局
								URL路由+伪静态
							</p>
						</div>
					</div>
					<div class="item">
						<img src="/myweb/Home/default/resource/images/carousel/carousel-img-7.png"/>
						<div class="carousel-caption">
							<h3>快速强大的底层核心</h3>
							<p>
								全新的web设计理念
								精良的前端设计
								快速的一键式部署
								永久开源免费
							</p>
						</div>
					</div>
				</div>
				<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
				</a>
				<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
				</a>
			</div>
		</div>

		<div class="slice bg-2 p-15">
			<div class="cta-wr">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<h1>
								<strong>CXPHP + Bootstrap</strong> 
								写最少的代码，享受最酷的WEB体验!
							</h1>
						</div>
						<div class="col-md-4">
							<a class="btn btn-one btn-lg pull-right" title="thinkcmf" href="javascript:void(0)" target="blank">
								<i class="fa fa-bolt"></i> 闪电开始
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<style type="text/css">
			.w-box.white .thmb-img i{
				color:#59b2e5;
			}
		</style>
		<div class="slice bg-5 section">
			<div class="w-section inverse">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6">
							<div class="w-box white">
								<div class="thmb-img">
									<i class="fa fa-lightbulb-o"></i>
								</div>

								<h2>快速搭建原型</h2>
								<p class="text-center">我们提供了高效的内容管理系统，让你的idea迅速变成产品，CXPHP为你助力。 </p>
							</div>
						</div>

						<div class="col-lg-3 col-md-6">
							<div class="w-box white">
								<div class="thmb-img">
									<i class="fa fa-cloud"></i>
								</div>

								<h2>云端一键部署</h2>
								<p class="text-center">CXPHP以后版本均支持SAE一键部署，便捷的安装，云端本地同等的运行环境，前所未有的体验 </p>
							</div>
						</div>

						<div class="col-lg-3 col-md-6">
							<div class="w-box white">
								<div class="thmb-img">
									<i class="fa fa-code"></i>
								</div>

								<h2>优秀的PHP框架</h2>
								<p class="text-center">CXPHP延续了ThinkPHP优秀的构架思想，在MVC分层，系统安全性方面表现卓越。 </p>
							</div>
						</div>

						<div class="col-lg-3 col-md-6">
							<div class="w-box white">
								<div class="thmb-img">
									<i class="fa fa-rocket"></i>
								</div>

								<h2>先进前端理念</h2>
								<p class="text-center">我们使用BootStrap进行前端布局，在此过程中我们还致力于改进BootStrap对低版本IE的兼容性。 </p>
							</div>
						</div>

					</div>
				</div>
			</div>    
		</div>

		<?php $post=sp_sql_post($Portal_index['Article']['CXPHP'],'field:post_title,post_content,smeta;'); $pic=json_decode($post['smeta'],true); $advantage=sp_sql_posts('cid:'.$Portal_index['Cat']['Advantage'].';field:post_title,post_content,tid;order:listorder asc;limit:3;'); ?>
		<div class="slice bg-5 section">
			<div class="w-section inverse">
				<div class="container">
					<div class="row">
						<div class="col-md-7">
							<h3 class="section-title"><span><?php echo ((isset($post["post_title"]) && ($post["post_title"] !== ""))?($post["post_title"]):'CXPHP'); ?></span></h3>
							<div class="row">
								<div class="col-md-4">
									<img src="<?php echo ((isset($pic["thumb"]) && ($pic["thumb"] !== ""))?($pic["thumb"]):'/myweb/Home/default/resource/images/prv/col-img-4.jpg'); ?>"  alt="<?php echo ($post_title); ?>" class="img-responsive img-thumbnail">
								</div>
								<div class="col-md-8">
									<?php echo ((isset($post["post_content"]) && ($post["post_content"] !== ""))?($post["post_content"]):'当你在后台添加后内容将自动被替换！'); ?>
								</div>
							</div>
							<blockquote class="blockquote-1">
								<p>CXPHP力求成为国内最优秀的开源内容管理框架，长期以来CXPHP官方团队一直致力于核心维护，虽在应用丰富性上尚且有些欠缺但已获得相当一部分的忠实用户。</p>
								<small>CXPHP</small>
							</blockquote>
						</div>
						<div class="col-md-5">
							<h3 class="section-title">业内优势</h3>

							<div class="widget">
								<div class="panel-group" id="accordion">
									<?php if(is_array($advantage)): foreach($advantage as $key=>$vo): ?><div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion" href="#<?php echo ($vo["tid"]); ?>" class="collapsed">
														<?php echo ((isset($vo["post_title"]) && ($vo["post_title"] !== ""))?($vo["post_title"]):'当你在后台添加后内容将自动被替换！'); ?>
													</a>
												</h4>
											</div>
											<div id="<?php echo ($vo["tid"]); ?>" class="panel-collapse collapse" style="height: 0px;">
												<div class="panel-body">
													<?php echo ((isset($vo["post_content"]) && ($vo["post_content"] !== ""))?($vo["post_content"]):'当你在后台添加后内容将自动被替换！'); ?>
												</div>
											</div>
										</div><?php endforeach; endif; ?>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>    
		</div>
		<?php $Presentation=sp_sql_posts('cid:'.$Portal_index['Cat']['Presentation'].';field:post_title,post_excerpt,tid,smeta;order:listorder asc;'); ?>
		<?php if(!empty($Presentation)): ?><div class="slice relative animate-hover-slide bg-3 section">
				<div class="w-section inverse">
					<div class="container">
						<h3 class="section-title">相关展示</h3>

						<div id="carouselWork" class="carousel-3 slide animate-hover-slide">
							<div class="carousel-nav">
								<a data-slide="prev" class="left" href="#carouselWork"><i class="fa fa-angle-left"></i></a>
								<a data-slide="next" class="right" href="#carouselWork"><i class="fa fa-angle-right"></i></a>
							</div>
							<!-- 相关展示轮播 -->
							<div class="carousel-inner">
								<?php $group_count = ceil(count($Presentation)/4); $group_last = intval(count($Presentation)%4); for($i=0; $i<$group_count; $i++){ $num = $i*4; $j_len = $i==$group_count-1 ? $group_last :4; ?>
								<div class="item <?php if($i==0){echo 'active';} ?>">
									<div class="row">
										<?php for($j=0; $j<$j_len; $j++){ $o = $Presentation[$num+$j]; $pic=json_decode($o['smeta'],true); ?>
										<div class="col-md-3">
											<div class="w-box inverse">
												<div class="figure">
													<img alt="" src="__UPLOAD__<?php echo ((isset($pic["thumb"]) && ($pic["thumb"] !== ""))?($pic["thumb"]):'/myweb/Home/default/resource/images/prv/wk-img-1.jpg'); ?>"  class="img-responsive">
													<div class="figcaption bg-2"></div>
													<div class="figcaption-btn">
														<a href="__UPLOAD__<?php echo ($pic["thumb"]); ?>"  class="btn btn-xs btn-one theater"><i class="fa fa-plus-circle"></i> 大图</a>
														<a href="<?php echo u('article/index',array('id'=>$o['tid']));?>" class="btn btn-xs btn-one"><i class="fa fa-link"></i> 详细</a>
													</div>
												</div>
												<div class="row">
													<div class="col-xs-9">
														<h2><?php echo ($o["post_title"]); ?></h2>
														<small><?php echo ($o["post_excerpt"]); ?></small>
													</div>
													<div class="col-xs-3">
														<div class="like-button">
															<!--<span class="button liked">
																<i class="fa fa-eye"></i>
															</span>
															<span class="count"><small>123</small></span>
															-->
														</div>
													</div>
												</div>
											</div>
										</div>
										<?php } ?>
									</div>
								</div>
								<?php } ?>
							</div>
						</div>

					</div>
				</div>
			</div>
			<?php else: endif; ?>

		<div class="slice bg-banner-1 section">
			<div class="w-section inverse">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="text-center">
								<h4><i class="fa fa-quote-left fa-3x"></i></h4>
								<h2>这个看上去是个非常棒的框架</h2>
								<p>
									CXPHP是一款基于PHP+MYSQL开发的中文内容管理框架。CXPHP提出灵活的应用机制，框架自身提供基础的管理功能，而开发者可以根据自身的需求以应用的形式进行扩展
								</p>
								<span class="clearfix"></span>

								<div class="text-center">
									<a href="javascript:void(0)" target="_blank" class="btn btn-lg btn-one mt-20">参与官方交流</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php $slide=sp_getslide($Portal_index['Slide']['mid_slide']); ?>
		<?php if(!empty($slide)): ?><div id="companyCarousel" class="carousel carousel-2 slide bg-3 section" data-ride="carousel">
				<div class="carousel-inner">
					<?php if(is_array($slide)): foreach($slide as $k=>$vo): if($k == 0): ?><div class="item active">
								<div class="container">
									<div class="row">
										<div class="col-md-6">
											<h2><?php echo ($vo["slide_name"]); ?></h2>
											<?php echo ($vo["slide_content"]); ?>
										</div>
										<div class="col-md-6">
											<img src="<?php echo ($vo["slide_pic"]); ?>"  class="img-responsive" alt="">
										</div>
									</div>
								</div>
							</div>
							<?php else: ?>
							<div class="item">
								<div class="container">
									<div class="row">
										<div class="col-md-6">
											<h2><?php echo ($vo["slide_name"]); ?></h2>
											<?php echo ($vo["slide_content"]); ?>
										</div>
										<div class="col-md-6">
											<img src="<?php echo ((isset($vo["slide_pic"]) && ($vo["slide_pic"] !== ""))?($vo["slide_pic"]):'/myweb/Home/default/resource/images/prv/device-3.png'); ?>"  class="img-responsive" alt="">
										</div>
									</div>
								</div>
							</div><?php endif; endforeach; endif; ?>
				</div>
				<a class="left carousel-control" href="#companyCarousel" data-slide="prev">
					<i class="fa fa-angle-left"></i>
				</a>
				<a class="right carousel-control" href="#companyCarousel" data-slide="next">
					<i class="fa fa-angle-right"></i>
				</a>
			</div>
			<?php else: endif; ?>
		<?php $Lastnews=sp_sql_posts('cid:'.$Portal_index['Cat']['Lastnews'].';field:post_title,post_content,tid,smeta,post_date;limit:4'); ?>
		<div class="slice animate-hover-slide bg-5 section">
			<div class="w-section inverse">
				<div class="container">
					<h3 class="section-title">最新新闻</h3>
					<div class="row">

						<?php if(is_array($Lastnews)): foreach($Lastnews as $key=>$vo): $pic=json_decode($vo['smeta'],true); ?>

							<div class="col-md-3">
								<div class="w-box">
									<div class="figure">
										<img alt="" src="__UPLOAD__<?php echo ($pic["thumb"]); ?>"  class="img-responsive">
										<span class="date-over small"><strong><?php echo date("M d,Y",strtotime($vo['post_date']));?></strong></span>
										<div class="figcaption bg-2"></div>
										<div class="figcaption-btn">
											<a href="__UPLOAD__<?php echo ($pic["thumb"]); ?>"  class="btn btn-xs btn-one theater"><i class="fa fa-plus-circle"></i> 大图</a>
											<a href="<?php echo u('article/index',array('id'=>$vo['tid']));?>" class="btn btn-xs btn-one"><i class="fa fa-link"></i>详细</a>
										</div>
									</div>
									<h2><?php echo ($vo["post_title"]); ?></h2>
									<?php echo ($vo["post_content"]); ?>
								</div>
							</div><?php endforeach; endif; ?>

					</div>
				</div>
			</div>
		</div>

		<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
				<div class="col">
					<h4>联系我们</h4>
					<ul>
                        <li>深圳南山区科技园科苑路科兴科学园</li>
                        <li>Tel: +86 ********* </li>
                        <li>Email: <a href="mailto:cxphp@qq.com" title="Email Us">cxphp@qq.com</a></li>
						<li>创造更便捷的建站体验！</li>
                    </ul>
				</div>
            </div>
            <div class="col-md-3">
				<div class="col">
                    <h4>邮箱列表</h4>
                    <p>如果你需要随时接受我们的最新咨询，请在下面留下你的邮箱。</p>
                    <form class="form-inline">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="你的Email地址..." />
                            <span class="input-group-btn">
                                <button class="btn btn-two" type="button">提交</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-3">
				<div class="col col-social-icons">
                    <h4>关注我们</h4>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-skype"></i></a>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                    <a href="#"><i class="fa fa-flickr"></i></a>
                </div>
            </div>

			<div class="col-md-3">
				<div class="col">
                    <h4>关于我们</h4>
                    <p>
						CXPHP是一款基于ThinkPHP3.22开发的内容管理框架。
						<br /><br />
						<a href="http://www.cxphp.cn" class="btn btn-two">Try it now!</a>
                    </p>
                </div>
            </div>
        </div>

        <hr />

        <div class="row">
			<div class="col-lg-9 copyright">
				2013 &copy; CXPHP. All rights reserverd. 
            </div>
        </div>
    </div>
</div>
	</div>

	<!-- JavaScript -->
<!-- JavaScript -->
<script type="text/javascript" src="/myweb/Home/default/resource/js/jquery.js" ></script>
<script type="text/javascript" src="/myweb/Home/default/resource/assets/bootstrap/js/bootstrap.min.js" ></script>
<script type="text/javascript" src="/myweb/Home/default/resource/js/modernizr.custom.js" ></script>
<script type="text/javascript" src="/myweb/Home/default/resource/js/jquery.mousewheel-3.0.6.pack.js" ></script>
<script type="text/javascript" src="/myweb/Home/default/resource/js/jquery.cookie.js" ></script>
<script type="text/javascript" src="/myweb/Home/default/resource/js/jquery.easing.js" ></script>

<!--[if lt IE 9]>
    <script src="/myweb/Home/default/resource/js/html5shiv.js" ></script>
    <script src="/myweb/Home/default/resource/js/respond.min.js"></script>
<![endif]-->
<script type="text/javascript" src="/myweb/Home/default/resource/assets/hover-dropdown/bootstrap-hover-dropdown.min.js" ></script>
<!-- <script type="text/javascript" src="/myweb/Home/default/resource/assets/masonry/masonry.js" ></script> -->
<script type="text/javascript" src="/myweb/Home/default/resource/assets/page-scroller/jquery.ui.totop.min.js" ></script>
<script type="text/javascript" src="/myweb/Home/default/resource/assets/mixitup/jquery.mixitup.js" ></script>
<script type="text/javascript" src="/myweb/Home/default/resource/assets/mixitup/jquery.mixitup.init.js" ></script>
<script type="text/javascript" src="/myweb/Home/default/resource/assets/fancybox/jquery.fancybox.pack.js" ></script>
<script type="text/javascript" src="/myweb/Home/default/resource/assets/easy-pie-chart/jquery.easypiechart.js" ></script>
<script type="text/javascript" src="/myweb/Home/default/resource/assets/waypoints/waypoints.min.js" ></script>
<script type="text/javascript" src="/myweb/Home/default/resource/js/jquery.wp.custom.js" ></script>
<?php echo ($site_tongji); ?>

<script type="text/javascript">
	$(function() {
		$("#main_nav a").each(function() {
			if ($(this)[0].href === String(window.location)) {
				$(this).parentsUntil("#main_nav>ul").addClass("active");
			}
		});
	});
</script>
<script src="/myweb/Home/default/resource/assets/fraction/jquery.fractionslider.min.js" ></script>
<script src="/myweb/Home/default/resource/assets/fraction/jquery.fractionslider.init.js" ></script>
</body>
</html>