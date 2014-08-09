<!DOCTYPE html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if IE]>
	   <style type="text/css">
	   .bannertext { 
	       background:transparent !important;
	       filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#55555555,endColorstr=#55555555) !important; 
	       zoom: 1 !important;
	    } 
	    </style>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="wrapper">
		<div id="header">
			<div id="logo"><a class="nounderline" href="<?php get_bloginfo(); ?>"><?php get_image("logo.png","logo"); ?></a></div>
			<div id="contact">
				CALL US
				<span class="blue"><?php echo enzymatic_setting("enzymatic_contact_setting","contactnumber"); ?></span>
			</div>
			<div class="clear"></div>
		</div>

		<div id="navigation">
			<div id="menuicon"><?php get_image("menu_icon.png","menu icon"); ?></div>
			<?php wp_nav_menu(array("theme_location"=>"header")); ?>
		</div>

		<div id="banner">
			<?php
				$banners = new WP_Query(array(
					"post_type"=>"banner",
					"post_status"=>"publish",
					"orderby"=>"menu_order",
					"order"=>"ASC"
				));
			?>
			<?php while($banners->have_posts()): $banners->the_post(); ?>
				<div class="bannerimage">
					<?php echo get_the_post_thumbnail(); ?>	
					<div class="bannertext"><?php the_excerpt(); ?></div>	
				</div>
			<?php endwhile; wp_reset_postdata(); ?>
		</div>
		<div id="bannershadow"><?php get_image("bannershadow.png","bannershadow"); ?></div>