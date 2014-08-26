<?php
	/* 
	Template Name: Sitemap
	Description: Template used Sitemap
	*/
?>

<?php get_header(); ?>
		<div id="content">
			<div id="left">
				<h1><?php the_title(); ?></h1>
				<p>Feel free to take a tour on our pages.</p>
				<?php wp_nav_menu(array("theme_location"=>"header","menu_class"=>"pin")); ?>
			</div>
			<div id="right">
				<?php get_sidebar(); ?>
			</div>
			<div class="clear"></div>
		</div>
	</div>
<?php get_footer(); ?>