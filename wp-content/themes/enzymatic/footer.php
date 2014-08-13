		<div id="footernav">
			<div id="footernavcontent">
				<?php wp_nav_menu(array("theme_location"=>"footer")); ?>
			</div>
		</div>
		<div id="footer">
			<div id="footercontent">
				<div class="footerbox">
					<div class="center">
						<a class="nounderline" href="<?php get_bloginfo(); ?>"><?php get_image("footerlogo.png","Enzymatic"); ?></a>
					</div><br/>
					<div class="footerboxcontent">
						<?php $aboutus = get_post_meta( 7 ); ?>
						<?php echo $aboutus['footervalue'][0]; ?>
						<br/><br/>
						<a href="<?php echo get_permalink(7); ?>">read more >></a>
					</div>
				</div>
				<div class="footerbox">
					<div class="footerboxcontent">
						<h1>Our Location</h1><br/>
						<table>
							<colgroup width="30"></colgroup>
							<tr>
								<td valign="top"><?php get_image("icon_address.png","address"); ?></td>
								<td><?php echo enzymatic_setting("enzymatic_contact_setting","address"); ?></td>
							</tr>
							<tr>
								<td valign="top"><?php get_image("icon_mobile.png","number"); ?></td>
								<td>Tel: <?php echo enzymatic_setting("enzymatic_contact_setting","contactnumber"); ?></td>
							</tr>
							<tr>
								<td valign="top"><?php get_image("icon_email.png","email"); ?></td>
								<td><a href="mailto:<?php echo enzymatic_setting("enzymatic_contact_setting","email"); ?>"><?php echo enzymatic_setting("enzymatic_contact_setting","email"); ?></a></td>
							</tr>
						</table>
						<br/>
						<a target="_blank" href="<?php echo enzymatic_setting("enzymatic_contact_setting","facebook"); ?>" class="nounderline">
							<td valign="top"><?php get_image("icon_facebook.png","facebook"); ?></td>
						</a> 
						<a target="_blank" href="<?php echo enzymatic_setting("enzymatic_contact_setting","twitter"); ?>" class="nounderline">
							<td valign="top"><?php get_image("icon_twitter.png","twitter"); ?></td>
						</a> 
						<a target="_blank" href="<?php echo enzymatic_setting("enzymatic_contact_setting","youtube"); ?>" class="nounderline">
							<td valign="top"><?php get_image("icon_youtube.png","youtube"); ?></td>
						</a> 
					</div>
				</div>
				<div class="footerbox">
					<div class="footerboxcontent">
						<h1>Enquire Now</h1><br/>
						<?php
							// $testimonials = new WP_Query(array(
							// 	"post_type"=>"testimonial",
							// 	"post_status"=>"publish",
							// 	"showposts"=>2
							// ));
						?>

						<?php //while($testimonials->have_posts()): $testimonials->the_post(); ?>
							<!--<strong><?php //the_title(); ?></strong> <i><small><?php //the_time('F j, Y'); ?></small></i>!-->
							<?php //the_excerpt(); ?>
							<!--<br/>!-->
						<?php //endwhile; wp_reset_postdata(); ?>
						<?php $contactus = get_post_meta( 27 ); ?>
						<?php echo $contactus['footervalue'][0]; ?>
						<br/><br/>
						<i><a href="<?php echo get_permalink(27); ?>">Enquire Now!</a></i>
					</div>
				</div>
				<div class="clear"></div>
				<hr/>
				<div id="copyright">&copy; Copyright 2014 <strong>Enzymatic</strong>. All rights reserved.</div>
			</div>
		</div>
		<?php wp_footer(); ?>
	</body>
</html>
