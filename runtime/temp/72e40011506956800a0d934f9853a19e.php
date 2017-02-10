<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:62:"D:\www\zccpal\public/../application/back\view\index\index.html";i:1477899911;s:57:"D:\www\zccpal\public/../application/back\view\layout.html";i:1477898842;s:68:"D:\www\zccpal\public/../application/back\view\public\breadcrumb.html";i:1477106812;s:60:"D:\www\zccpal\public/../application/back\view\public\js.html";i:1477385586;}*/ ?>
<!DOCTYPE html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
	<meta name="format-detection" content="telephone=no">
	<meta charset="UTF-8">
	<meta name="description" content="Violate Responsive Admin Template">
	<meta name="keywords" content="Super Admin, Admin, Template, Bootstrap">

	<title>后台管理系统模板</title>
	<!-- CSS -->
<link rel="shortcut icon" href="<?php echo \think\Config::get('Houtai'); ?>favicon.ico" type="image/x-icon"/>

	<link href="<?php echo \think\Config::get('Houtai'); ?>css/
bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo \think\Config::get('Houtai'); ?>css/
animate.min.css" rel="stylesheet">
	<link href="<?php echo \think\Config::get('Houtai'); ?>css/
font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo \think\Config::get('Houtai'); ?>css/
form.css" rel="stylesheet">
	<link href="<?php echo \think\Config::get('Houtai'); ?>css/
calendar.css" rel="stylesheet">
	<link href="<?php echo \think\Config::get('Houtai'); ?>css/
style.css" rel="stylesheet">
	<link href="<?php echo \think\Config::get('Houtai'); ?>css/
icons.css" rel="stylesheet">
	<link href="<?php echo \think\Config::get('Houtai'); ?>css/
generics.css" rel="stylesheet">
</head>

<body id="skin-blur-violate">
	<header id="header" class="media">
		<a href="" id="menu-toggle"></a>
		<a class="logo pull-left" href="<?php echo url('index/index'); ?>">后台管理系统</a>

		<div class="media-body">
			<div class="media" id="top-menu">
				<div class="pull-left tm-icon">
					<a class="drawer-toggle" href="<?php echo url('index/logout'); ?>">
						<i class="sa-top-updates"></i>
						<i class="n-count animated">
                            退出</i>
						<span class="pull-right"></span>
					</a>
				</div>

				<div id="time" class="pull-right">
					<span id="hours"></span> :
					<span id="min"></span> :
					<span id="sec"></span>
				</div>

				<div class="media-body">
					<input type="text" class="main-search">
				</div>
			</div>
		</div>
	</header>

	<div class="clearfix"></div>

	<section id="main" class="p-relative" role="main">

		<!-- Sidebar -->
		<aside id="sidebar">

			<!-- Sidbar Widgets -->
			<div class="side-widgets overflow">

				<div class="text-center s-widget m-b-25 dropdown" id="profile-menu">
					<a href="" data-toggle="dropdown">
						<?php if(empty($user['head']) || ($user['head'] instanceof \think\Collection && $user['head']->isEmpty())): ?>
						<img class="profile-pic animated" src="<?php echo \think\Config::get('Houtai'); ?>img/
profile-pic.jpg" alt=""> <?php else: ?><img class="profile-pic animated" src="<?php echo $user['head']; ?>" alt=""> <?php endif; ?>

					</a>
					<ul class="dropdown-menu profile-menu">
						<li>
							<a href="<?php echo url('back/index/profile'); ?>">个人信息</a> <i class="icon left">&#61903;</i><i class="icon right">&#61815;</i></li>

						<li>
							<a href="<?php echo url('back/index/proedit'); ?>">修改信息</a> <i class="icon left">&#61903;</i><i class="icon right">&#61815;</i></li>
						<li>
							<a href="<?php echo url('back/index/logout'); ?>">注销登录</a> <i class="icon left">&#61903;</i><i class="icon right">&#61815;</i></li>
					</ul>
					<h4 class="m-0">欢迎登录:<?php echo $user['name']; ?></h4>

				</div>

				<!-- Calendar -->
				<div class="s-widget m-b-25">
					<div id="sidebar-calendar"></div>
				</div>

				<!-- Feeds -->
				<div class="s-widget m-b-25">
					<h2 class="tile-title">
                           最新文章
                        </h2>

					<div class="s-widget-body">
						<div id="news-feed"></div>
					</div>
				</div>

				<!-- Projects -->
				<div class="s-widget m-b-25">
					<h2 class="tile-title">
                            Projects on going
                        </h2>
					<div class="s-widget-body">
						<div class="side-border">
							<small>Joomla Website</small>
							<div class="progress progress-small">
								<a href="#" data-toggle="tooltip" title="" class="progress-bar tooltips progress-bar-danger" style="width: 60%;" data-original-title="60%">
									<span class="sr-only">60% Complete</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Side Menu -->
			<ul class="list-unstyled side-menu">

				
				<?php if(is_array($ruledata) || $ruledata instanceof \think\Collection): $i = 0; $__LIST__ = $ruledata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rule): $mod = ($i % 2 );++$i;?>
				<li class="dropdown">
					<a class="<?php echo $rule->class; ?>" href="#">
						<span class="menu-item"><?php echo $rule->title; ?></span>
					</a>
					<ul class="list-unstyled menu-item">
						<?php if(is_array($rule->parent) || $rule->parent instanceof \think\Collection): $i = 0; $__LIST__ = $rule->parent;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$r): $mod = ($i % 2 );++$i;?>
						<li>
							<a href="<?php echo \think\Config::get('Url'); ?><?php echo $r->name; ?>"><?php echo $r->title; ?></a>
						</li>
						
                       <?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			
			</ul>

		</aside>

		<!-- Content -->
		

<!-- Content -->
<section id="content" class="container">
	<!-- Breadcrumb -->
	    <?php if(isset($breadcrumb)): ?>
                <ol class="breadcrumb hidden-xs">
                     <li><a href="<?php echo url('index/index'); ?>">首页</a></li>
                    <?php if(is_array($breadcrumb) || $breadcrumb instanceof \think\Collection): $i = 0; $__LIST__ = $breadcrumb;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <li><a href="<?php echo url($vo['name']); ?>"><?php echo $vo['title']; ?></a></li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ol>
                  <?php endif; ?>
	<h4 class="page-title">钟程程-2016/10</h4>

	<!-- Shortcuts -->
	<div class="block-area ">
	<div class="row">
	<div class="col-md-9">
	<div class="tile-light p-5 m-b-15">
                                <div class="cover p-relative">
                                    <img src="<?php echo \think\Config::get('Houtai'); ?>img/cover-bg.jpg" class="w-100" alt="">
                                    <img class="profile-pic" src="<?php echo \think\Config::get('Houtai'); ?>img/profile-pic.jpg" alt="">
                                
                                </div>
                                <div class="p-5 m-t-15">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget risus rhoncus, cursus purus vitae, venenatis eros. Phasellus at tincidunt risus. Integer sed massa fermentum, feugiat arcu quis, ultrices nisi. Quisque commodo nisi scelerisque, tempus diam ac, dignissim tellus. Mauris adipiscing elit tortor, dignissim auctor diam mollis sed. Nulla eu dui non velit accumsan scelerisque eget et felis.
                                </div>
                            </div>
							</div>
		<div class="col-md-3">
			<div class="tile">
                                <h2 class="tile-title">Power By Zcc</h2>                               
                                <div class="listview icon-list">

                                    
                                    <div class="media">
                                        <i class="icon pull-left"></i>
                                        <div class="media-body">QQ:2351976426</div>
                                    </div>
                                    
                                    <div class="media">
                                        <i class="icon pull-left"></i>
                                        <div class="media-body">Lives in 杭州,浙江</div>
                                    </div>
									 <div class="media">
                                        <i class="icon pull-left"></i>
                                        <div class="media-body">QQ:2351976426</div>
                                    </div>
                                    
                                    <div class="media">
                                        <i class="icon pull-left"></i>
                                        <div class="media-body">Lives in 杭州,浙江</div>
                                    </div>

                                </div>
                            </div>
		
		
		</div>
	
	</div>
	
	</div>


	<hr class="whiter" />

	<div class="block-area">
		<div class="row">
			<div class="col-md-7">
				<!--  Recent Postings -->
				<div class="row">
					<div class="col-md-6">
						<div class="tile">
							<h2 class="tile-title">最近发表</h2>
							<div class="listview narrow">
								<div class="media p-l-5">
									<div class="pull-left">
										<img width="40" src="<?php echo \think\Config::get('Houtai'); ?>img/profile-pics/1.jpg" alt="">
									</div>
									<div class="media-body">
										<small class="text-muted">最新的文章什么的，自己写调用</small><br/>
										<a class="t-overflow" href="">那女孩对我说，要我保护她的梦</a>
									</div>
								</div>
								<div class="media p-l-5">
									<div class="pull-left">
										<img width="40" src="<?php echo \think\Config::get('Houtai'); ?>img/profile-pics/1.jpg" alt="">
									</div>
									<div class="media-body">
										<small class="text-muted">最新的文章什么的，自己写调用</small><br/>
										<a class="t-overflow" href="">那女孩对我说，要我保护她的梦</a>
									</div>
								</div>
								<div class="media p-l-5">
									<div class="pull-left">
										<img width="40" src="<?php echo \think\Config::get('Houtai'); ?>img/profile-pics/1.jpg" alt="">
									</div>
									<div class="media-body">
										<small class="text-muted">最新的文章什么的，自己写调用</small><br/>
										<a class="t-overflow" href="">那女孩对我说，要我保护她的梦</a>
									</div>
								</div>

								<div class="media p-5 text-center l-100">
									<a href=""><small>查看所有</small></a>
								</div>
							</div>
						</div>
					</div>

					
					
					
					<!-- Tasks to do -->
					<div class="col-md-6">
						<div class="tile">
							<h2 class="tile-title">仔细你就看到了这里</h2>

							<div class="listview todo-list ">
								<div class="media">
									<label class="t-overflow">             
                                                       觉得这个后台主题好的，加小主QQ:2351976426,我拉你进群自己下载这个后台主题模板。
                                   </label>
								</div>
							</div>
							<h2 class="tile-title">仔细你就看到了这里</h2>
							<div class="listview todo-list ">
								<div class="media">
									<label class="t-overflow">             
                                                       觉得这个后台主题好的，加小主QQ:2351976426,我拉你进群自己下载这个后台主题模板。
                                   </label>
								</div>
							</div>
							<h2 class="tile-title">仔细你就看到了这里</h2>
							<div class="listview todo-list ">
								<div class="media">
									<label class="t-overflow">             
                                                       觉得这个后台主题好的，加小主QQ:2351976426,我拉你进群自己下载这个后台主题模板。
                                   </label>
								</div>
							</div>

						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>

			<div class="col-md-5">

				<!-- Activity -->
				<div class="tile">
                                        <h2 class="tile-title m-b-5">需要更炫主题加QQ:2351976426</h2>
   
                                        
                                        <div class="p-10 news">
                                            <div class="col-xs-4">
                                                <div class="tile p-5 m-b-10">
                                                    <a target="_blank" title="Medical-Pro Bootstrap Responsive Template" href="#">
                                                        <img class="w-100" src="<?php echo \think\Config::get('Houtai'); ?>img/projects/1.png" alt="">
                                                        <small class="t-overflow m-t-10">认真是一种态度</small>
                                                    </a>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="col-xs-4">
                                                <div class="tile p-5 m-b-10">
                                                    <a target="_blank" title="Black Pearl Responsive Admin Template" href="#">
                                                        <img class="w-100" src="<?php echo \think\Config::get('Houtai'); ?>img/projects/2.png" alt="">
                                                        <small class="t-overflow m-t-10">坚持是一种品格</small>
                                                    </a>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="col-xs-4">
                                                <div class="tile p-5 m-b-10">
                                                    <a target="_blank" title="UNEKUE Single Page Portfolio Template" href="#">
                                                        <img class="w-100" src="<?php echo \think\Config::get('Houtai'); ?>img/projects/3.png" alt="">
                                                        <small class="t-overflow m-t-10">优秀是一种习惯</small>
                                                    </a>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
			</div>
			
			<div class="clearfix"></div>
			
			
			
		</div>
	</div>
	
			
			
			<hr class="whiter" />
	
	<div class="block-area">
                    <h3 class="block-title">QQ:2351976426</h3>
                    <p>后台首页自己去写页面。自己咋喜欢咋样搞！.</p>
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                        </ol>
                      
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="<?php echo \think\Config::get('Houtai'); ?>img/carousel/c-1.jpg" alt="Slide-1">
								  <div class="carousel-caption hidden-xs">
                                    <h3>技术探讨交流加QQ:2351976426</h3>
                                    <p>重要的事说三遍</p>
                                </div>
                            </div>
                            <div class="item">
                                <img src="<?php echo \think\Config::get('Houtai'); ?>img/carousel/c-2.jpg" alt="Slide-2">
                                <div class="carousel-caption hidden-xs">
                                    <h3>技术探讨交流QQ:2351976426</h3>
                                    <p>重要的事说三遍</p>
                                </div>
                            </div>
                            <div class="item">
                                <img src="<?php echo \think\Config::get('Houtai'); ?>img/carousel/c-3.jpg" alt="Slide-3">
                                <div class="carousel-caption hidden-xs">
                                    <h3>技术探讨交流QQ:2351976426</h3>
                                    <p>重要的事说三遍</p>
                                </div>
                            </div>
                        </div>
                      
                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <i class="icon"></i>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <i class="icon"></i>
                        </a>
                    </div>

                </div>

</section>

	</section>
	      <!-- Javascript Libraries -->
        <!-- jQuery -->
        <script src="<?php echo \think\Config::get('Houtai'); ?>js/jquery.min.js"></script> <!-- jQuery Library -->
        
        <!-- Bootstrap -->
        <script src="<?php echo \think\Config::get('Houtai'); ?>js/bootstrap.min.js"></script>
        
        <!--  Form Related -->
        <script src="<?php echo \think\Config::get('Houtai'); ?>js/icheck.js"></script> <!-- Custom Checkbox + Radio -->
        
        <!-- UX -->
        <script src="<?php echo \think\Config::get('Houtai'); ?>js/scroll.min.js"></script> <!-- Custom Scrollbar -->
          <script src="<?php echo \think\Config::get('Houtai'); ?>js/fileupload.min.js"></script> <!-- File Upload -->
        <!-- Other -->
        <script src="<?php echo \think\Config::get('Houtai'); ?>js/calendar.min.js"></script> <!-- Calendar -->
        <script src="<?php echo \think\Config::get('Houtai'); ?>js/feeds.min.js"></script> <!-- News Feeds -->
        
        
        <!-- All JS functions -->
        <script src="<?php echo \think\Config::get('Houtai'); ?>js/functions.js"></script>

</body>

</html>