<?php get_header(); ?>
	<?php $featured_image_position = get_post_meta( get_the_ID() ); ?>
	<?php $featured_image_position = $featured_image_position['featured_image_location'][0]; ?>
	
		<div id="content">
			<div id="left">
				<h1><?php the_title(); ?></h1>
				
				<?php if($featured_image_position == "Top"): ?>
					<?php if(has_post_thumbnail()): ?>
						<div id="featured_image">
							<?php the_post_thumbnail(); ?>
						</div>
						<div id="featured_image_shadow">
							<?php get_image("featuredimageshadow.png",""); ?>
						</div>
					<?php endif; ?>
				<?php endif; ?>

				<?php while(have_posts()): the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; ?>
		
				<?php if($featured_image_position == "" || $featured_image_position == "Bottom"): ?>
					<?php if(has_post_thumbnail()): ?>
						<div id="featured_image">
							<?php the_post_thumbnail(); ?>
						</div>
						<div id="featured_image_shadow">
							<?php get_image("featuredimageshadow.png",""); ?>
						</div>
					<?php endif; ?>
				<?php endif; ?>
			</div>
			<div id="right">
				<?php get_sidebar(); ?>
			</div>
			<div class="clear"></div>
		</div>
	</div>
<?php get_footer(); ?>