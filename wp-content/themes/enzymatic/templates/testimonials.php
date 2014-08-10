<?php
	/* 
	Template Name(hide): Testimonials
	Description: Template used for listing testimonials
	*/
?>

<?php get_header(); ?>
		<div id="content">
			<div id="left">
				<h1><?php the_title(); ?></h1>
				<?php while(have_posts()): the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; ?>

				<?php
					$testimonials = new WP_Query(array(
						"post_type"=>"testimonial",
						"post_status"=>"publish"
					));
				?>

				<?php while($testimonials->have_posts()): $testimonials->the_post(); ?>
					<div class="testimonial">
						<i><?php the_content(); ?></i>
						<div class="alignright">
							<strong><?php the_title(); ?></strong>,
							<small><i><?php the_time('F j, Y'); ?></i></small>
						</div>
					</div>
					<br/>
				<?php endwhile; wp_reset_postdata(); ?>
			</div>
			<div id="right">
				<?php get_sidebar(); ?>
			</div>
			<div class="clear"></div>
		</div>
	</div>
<?php get_footer(); ?>