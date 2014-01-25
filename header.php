<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title><?php if ( is_tag() ) { echo wp_title('Tag:');if($paged > 1) printf(' - 第%s页',$paged);echo ' | '; bloginfo( 'name' );} elseif ( is_archive() ) {echo wp_title('');  if($paged > 1) printf(' - 第%s页',$paged);    echo ' | ';    bloginfo( 'name' );} elseif ( is_search() ) {echo '&quot;'.wp_specialchars($s).'&quot;的搜索结果 | '; bloginfo( 'name' );} elseif ( is_home() ) {bloginfo( 'name' );$paged = get_query_var('paged'); if($paged > 1) printf(' - 第%s页',$paged);}  elseif ( is_404() ) {echo '页面不存在！ | '; bloginfo( 'name' );} else {echo wp_title( ' | ', false, right )  ; bloginfo( 'name' );} ?></title>
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/all.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/comments-ajax.js" type="text/javascript"></script>
<!-- 		style file -->
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css">
		<link rel="stylesheet/less" type="text/css" href="<?php bloginfo('template_directory'); ?>/main_styling.less">
		<script src="<?php bloginfo('template_directory'); ?>/js/less-1.3.3.min.js" type="text/javascript"> </script>
		<link href="<?php bloginfo('template_url'); ?>/css/font-awesome.css" rel="stylesheet">
		<link rel="Shortcut Icon" href="<?php bloginfo('template_url'); ?>/favicon.ico"> 
		<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
		<link rel="alternate" type="application/rss+xml" title="RSS 1.0" href="<?php bloginfo('rss_url'); ?>" />
		<link rel="alternate" type="application/atom+xml" title="ATOM 1.0" href="<?php bloginfo('atom_url'); ?>" />
		<?php wp_head(); ?> 
	</head>
	<body>
		<header class="transition">
			<a id="logo" href="http://moe.akibarika.org">
				Akiba
				<span>Rika</span>
			</a>
			<nav id="header-cate" class="transition">
				<ul>
					<li><a href="https://twitter.com/Akiba_Rika"><i class="icon-twitter icon-3x"></i></a></li>
					<li><a href="http://weibo.com/rikatan"><i class="icon-weibo icon-3x"></i></a></li>
					<li><a href="http://www.flickr.com/photos/akibarika/"><i class="icon-flickr icon-3x"></i></a></li>
					<li><a href="https://plus.google.com/u/0/103659577793041448146"><i class="icon-google-plus-sign icon-3x"></i></a></li>
					<li><a href="http://instagram.com/akibarika"><i class="icon-instagram icon-3x"></i></a></li>
					<li><a href="https://foursquare.com/akiba_rika"><i class="icon-foursquare icon-3x"></i></a></li>
				</ul>	
			</nav>
		</header>
		<nav id="menu" class="clearfix transition">
			<a id="more" class="left"><i class="icon-collapse  icon-2x"></i> Page</a>
			<?php  wp_nav_menu( array( 'theme_location' => 'menu' ,'container'=>'','menu_id'=>'1st-menu') ); ?>
			<div id="search">
				<?php get_search_form(); ?>
			</div>			
		</nav>
		<nav id="fixed_menu" class="clearfix transition none">
			<a id="more_more" class="left"><i class="icon-collapse  icon-2x"></i> Page</a>
			<?php  wp_nav_menu( array( 'theme_location' => 'menu' ,'container'=>'','menu_id'=>'2nd-menu') ); ?>
			<a id="tool" class="right"><i class="icon-gears icon-2x"></i> Tool</a>		
		</nav>	
		<section id="content" class="clearfix">
			<aside id="left-sidebar">
				<ul>
					<li>
						<a href="#"><i class="icon-user icon-2x"></i><span>About</span></a>
					</li>
					<li>
						<a href="#"><i class="icon-comment icon-2x"></i><span>Contact</span></a>
					</li>
				</ul>
			</aside>
			<aside id="right-sidebar">
				<div id="mini-search">
					<form method="get" action="<?php bloginfo ('url');?>" role="search">
						<input placeholder="//search" type="text" name="s" id="mini-s" class="text"  x-webkit-speech />
					</form>
				</div>		