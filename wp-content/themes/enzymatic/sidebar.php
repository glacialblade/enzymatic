<h1>
	<img src="<?php echo get_template_directory_uri(); ?>/images/logonotext.png" alt="logo"
	     id="logonotext">
	<span id="logonotext_text">We're available 24/7</span>
</h1>
<div class="sidebarbox">
	<div class="sidebarboxheading">
		ENQUIRE NOW
	</div>
	<div class="sidebarboxcontent">
		<h2 class="nopadding nomargin">Enzymatic</h2>
		<br/>
		<?php echo enzymatic_setting("enzymatic_contact_setting","googlemap"); ?>
		<br/><br/>
		<?php echo enzymatic_setting("enzymatic_contact_setting","address"); ?>
		<br/><br/>
		Tel: <?php echo enzymatic_setting("enzymatic_contact_setting","contactnumber"); ?><br/>
		Mail: 
		<a href="mailto:<?php echo enzymatic_setting("enzymatic_contact_setting","email"); ?>"><?php echo enzymatic_setting("enzymatic_contact_setting","email"); ?></a>
	</div>
</div>
<br/>
<?php
	dynamic_sidebar("sidebar");
?>