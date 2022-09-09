<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="robots" content="index,follow" />
	<meta name="revisit-after" content="7 Days" />

	<title>
		<?php if ( is_home() ) { ?><?php bloginfo('description'); ?> | <? bloginfo('name'); ?><?php } ?>
		<?php if ( is_search() ) { ?><?php echo the_search_query(); ?> | <? bloginfo('name'); ?><?php } ?>
		<?php if ( is_single() ) { ?><?php wp_title(''); ?> | <? bloginfo('name'); ?><?php } ?>
		<?php if ( is_page() ) { ?><?php wp_title(''); ?> | <? bloginfo('name'); ?><?php } ?>
		<?php if ( is_category() ) { ?>Archive <?php single_cat_title(); ?> | <? bloginfo('name'); ?><?php } ?>
		<?php if ( is_month() ) { ?>Archive <?php the_time('F'); ?> | <? bloginfo('name'); ?><?php } ?>
		<?php if ( is_tag() ) { ?><?php single_tag_title();?> | <? bloginfo('name'); ?><?php } ?>
	</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css" integrity="sha256-gvEnj2axkqIj4wbYhPjbWV7zttgpzBVEgHub9AAZQD4=" crossorigin="anonymous" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link href="https://fonts.googleapis.com/css?family=Amiri:400,400i,700|Catamaran:300,400,500,700" rel="stylesheet">
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="shortcut icon" type="image/x-png" href="<?php bloginfo('template_url'); ?>/images/favicon.png" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	
</head>

<body>
<div id="header">	
	<div id="logotitle">
		<div id="logo"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>" /></div>
		<div id="title">
			<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
			<h2><?php bloginfo('description'); ?></h2>
		</div>		
	</div>
		<ul id="menu">
			<?php wp_nav_menu( array( 
    'theme_location' => 'header-menu', 
    'container_class' => 'header-menu' ) );  ?>
		</ul>
</div>	