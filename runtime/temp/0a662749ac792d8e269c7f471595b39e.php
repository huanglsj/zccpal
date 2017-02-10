<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:64:"D:\www\zccpal\public/../application/back\view\article\index.html";i:1477726561;s:57:"D:\www\zccpal\public/../application/back\view\layout.html";i:1477898635;s:68:"D:\www\zccpal\public/../application/back\view\public\breadcrumb.html";i:1477106812;s:60:"D:\www\zccpal\public/../application/back\view\public\js.html";i:1477385586;}*/ ?>
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
				<!--<li class="active">
					<a class="sa-side-home" href="<?php echo url('back/index/index'); ?>">
						<span class="menu-item">主页/Home</span>
					</a>
				</li>-->

				<!--<li class="dropdown">
					<a class="sa-side-typography" href="<?php echo url('back/article/index'); ?>">
						<span class="menu-item">文章/Article</span>
					</a>
					<ul class="list-unstyled menu-item">
						<li>
							<a href="<?php echo url('back/page/index'); ?>">单页管理</a>
						</li>
						<li>
							<a href="<?php echo url('back/articlecat/index'); ?>">文章分类</a>
						</li>
						<li>
							<a href="<?php echo url('back/article/index'); ?>">文章列表</a>
						</li>

						<li>
							<a href="<?php echo url('back/attr/index'); ?>">文章属性</a>
						</li>

					</ul>
				</li>-->
				
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
				<!--<li>
					<a class="sa-side-table" href="tables.html">
						<span class="menu-item">Tables</span>
					</a>
				</li>
				<li class="dropdown">
					<a class="sa-side-form" href="">
						<span class="menu-item">权限管理</span>
					</a>
					<ul class="list-unstyled menu-item">
						<li>
							<a href="<?php echo url('back/user/index'); ?>">用户管理</a>
						</li>
						<li>
							<a href="<?php echo url('back/rule/index'); ?>">菜单管理</a>
						</li>
						<li>
							<a href="<?php echo url('back/groupdata/index'); ?>">角色管理</a>
						</li>
					</ul>
				</li>
				<li class="dropdown">
					<a class="sa-side-ui" href="">
						<span class="menu-item">User Interface</span>
					</a>
					<ul class="list-unstyled menu-item">
						<li>
							<a href="buttons.html">Buttons</a>
						</li>
						<li>
							<a href="labels.html">Labels</a>
						</li>
						<li>
							<a href="images-icons.html">Images &amp; Icons</a>
						</li>
						<li>
							<a href="alerts.html">Alerts</a>
						</li>
						<li>
							<a href="media.html">Media</a>
						</li>
						<li>
							<a href="components.html">Components</a>
						</li>
						<li>
							<a href="other-components.html">Others</a>
						</li>
					</ul>
				</li>
				<li>
					<a class="sa-side-chart" href="charts.html">
						<span class="menu-item">Charts</span>
					</a>
				</li>
				<li>
					<a class="sa-side-folder" href="file-manager.html">
						<span class="menu-item">File Manager</span>
					</a>
				</li>
				<li>
					<a class="sa-side-calendar" href="<?php echo url('back/index/logout'); ?>">
						<span class="menu-item">注销用户</span>
					</a>
				</li>
				<li class="dropdown">
					<a class="sa-side-page" href="">
						<span class="menu-item">功能管理</span>
					</a>
					<ul class="list-unstyled menu-item">
						<li>
							<a href="<?php echo url('back/links/index'); ?>">友情链接</a>
						</li>
						<li>
							<a href="<?php echo url('back/Focus/index'); ?>">焦点图列表</a>
						</li>
						<li>
							<a href="<?php echo url('back/Focusposition/index'); ?>">焦点图位置</a>
						</li>

					</ul>
				</li>-->
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
	<h4 class="page-title b-0">文章列表</h4>

	<div class="listview list-container">
		<header class="listview-header media">

			<ul class="list-inline list-mass-actions pull-left">
				<li>
					<a data-toggle="modal" href="<?php echo url('article/add'); ?>" title="添加文章" class="tooltips">
						<i class="sa-list-add"></i>
					</a>
				</li>

			</ul>


			<div class="clearfix"></div>
		</header>

		<?php if(is_array($article) || $article instanceof \think\Collection): $i = 0; $__LIST__ = $article;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$article): $mod = ($i % 2 );++$i;?>
		<div class="media">
			<div class="pull-left"><?php echo $article['id']; ?></div>
			<img class="media-object pull-left" src="<?php echo $article['thumbnail']; ?>" alt="" width="45">

			<div class="media-body">
				<?php echo $article['title']; ?>
				<div class="clearfix"></div>
				<small> <?php echo $article['description']; ?></small><br>
				<div class="block attrs">
					添加时间: <?php echo $article->create_time; ?>

				</div>
			</div>
			<div class="list-options">
				<button class="btn btn-sm"><a href="<?php echo url('article/edit',['id'=>$article['id']]); ?>">编辑</a></button>
				<button class="btn btn-sm"><a href="<?php echo url('article/destroy',['id'=>$article['id']]); ?>">删除</a></button>
			</div>
		</div>
		<?php endforeach; endif; else: echo "" ;endif; ?>
		<div class="media panel-footer text-center">
			<?php echo $page; ?>
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