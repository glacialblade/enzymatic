<!--<div id="sidebarlogo">!-->
	<!--
	<img src="<?php //echo get_template_directory_uri(); ?>/images/logonotext.png" alt="logo"
	     id="logonotext">!-->
	<!--
	<img src="<?php //echo get_template_directory_uri(); ?>/images/logonotext.png" alt="logo" id="logonotext"/>
	<div id="logonotext_text">
		We love cleaning so much that we never closes. We’re available to assist you with your cleaning needs <span class="green">24 hours a day, 7 days a week</span> and even on holidays.
	</div>
	<div class="clear"></div>
</div>
<!-->

<?php get_image("247.png","247"); ?>
<br/><br/>
<div class="sidebarbox">
	<?php 
		$page = get_post_meta( get_the_ID() ); 
		$button = $page['enquirybutton'][0];
	?>
	<?php if($button != "Request a Quote"): ?>
		<a href="<?php echo get_site_url()."/contact-us"; ?>">
			<div class="sidebarboxheading textcenter">
				ENQUIRE NOW
			</div>
		</a>
	<?php else: ?>
		<a href="<?php echo get_site_url()."/request-a-quote"; ?>">
			<div class="sidebarboxheading textcenter">
				REQUEST A QUOTE
			</div>
		</a>
	<?php endif; ?>
	<div class="sidebarboxcontent">
		<h2 class="nopadding nomargin">Enzymatic</h2>
		<br/>
		<?php echo enzymatic_setting("enzymatic_contact_setting","googlemap"); ?>
		<br/><br/>
		<?php echo enzymatic_setting("enzymatic_contact_setting","address"); ?>
		<br/><br/>
		<?php echo get_image("icon_mobile_dark.png","icon_mobile"); ?>
		<a href="tel:<?php echo enzymatic_setting("enzymatic_contact_setting","contactnumber"); ?>">
			<?php echo enzymatic_setting("enzymatic_contact_setting","contactnumber"); ?>
		</a>
		<br/>
		
		<?php echo get_image("icon_email_dark.png","icon_email"); ?>
		<a href="mailto:<?php echo enzymatic_setting("enzymatic_contact_setting","email"); ?>"><?php echo enzymatic_setting("enzymatic_contact_setting","email"); ?></a>
	</div>
</div>
<br/>
<?php
	dynamic_sidebar("sidebar");
?>