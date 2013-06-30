<!doctype html>
<html>
<head>
	<title><?php
	
	global $page, $paged;

	wp_title( '|', true, 'right' );

	
	bloginfo( 'name' );

	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>" />
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo bloginfo('template_directory')?>/images/favicon.ico">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss2_url'); ?>" />
		<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
<link href="http://fonts.googleapis.com/css?family=Ubuntu&subset=latin" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Cantarell&amp;subset=latin" rel="stylesheet" type="text/css" style="font-family: Cantarell; ">
	<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-31887309-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
	<?php wp_head(); ?>
</head>
<body>
	<section id="top">
		<header>
		  <hgroup>
		 	<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
		 	<h2><?php bloginfo('description'); ?></h2>
		 </hgroup>
		 <ul>
		 		<li><a href="<?php bloginfo('url'); ?>">Anasayfa</a></li>
		 		<?php wp_list_pages('title_li'); ?>
		 </ul>
		 <div class="clear"></div>
		</header>

		<nav>
			<ul>
				<li><a href="<?php bloginfo('url'); ?>">anasayfa</a></li>
				<?php wp_list_categories('title_li'); ?>

			</ul>
			<div id="search">
				<a href="<?php bloginfo('url'); ?>/s=ara" class="js-search">site içi arama</a>
					
			</div>
			<?php get_search_form( $echo ); ?>

			<div class="clear"></div>
		</nav>
	</section><!--top-->
	<section id="maincontent">
