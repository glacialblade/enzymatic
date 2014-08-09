<?php get_header(); ?>
		<div id="content">
			<div id="left">
				<h1><?php the_title(); ?></h1>
				<?php while(have_posts()): the_post(); ?>
					<?php the_post_thumbnail(); ?>
					<?php the_content(); ?>
				<?php endwhile; ?>
			</div>
			<div id="right">
				<?php get_sidebar(); ?>
			</div>
			<div class="clear"></div>
		</div>
	</div>
<?php get_footer(); ?>