<?php get_header(); ?>
		<div id="content">
			<div id="left">
				<h1>404 Error</h1>
				<h2 class="gray">Page not found, please try our existing pages</h2>
				<?php wp_nav_menu(array("theme_location"=>"header")); ?>
			</div>
			<div id="right">
				<?php get_sidebar(); ?>
			</div>
			<div class="clear"></div>
		</div>
	</div>
<?php get_footer(); ?>