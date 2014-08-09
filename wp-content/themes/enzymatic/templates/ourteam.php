<?php
	/* 
	Template Name: Our Team
	Description: Template used for listing team members.
	*/
?>

<?php get_header(); ?>
		<div id="content">
			<div id="left">
				<h1><?php the_title(); ?></h1>
				<?php
					$teams = new WP_Query(array(
						"post_type"=>"team",
						"post_status"=>"publish"
					));
				?>

				<?php while($teams->have_posts()): $teams->the_post(); ?>
					<div class="team">
						<div class="teamimagewrapper">
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail(); ?>
							</a>
						</div>
						<div class="teamlabel"><a class="nounderline" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
						<div class="teamshadow"><?php get_image("teamshadow.png","teamshadow"); ?></div>
					</div>
				<?php endwhile; wp_reset_postdata(); ?>
				<div class="clear"></div>
				<br/><br/>
			</div>
			<div id="right">
				<?php get_sidebar(); ?>
			</div>
			<div class="clear"></div>
		</div>
	</div>
<?php get_footer(); ?>