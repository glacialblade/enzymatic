<?php
class Code extends WP_Widget {
	public function __construct() {
		parent::__construct(
	 		'code', // Base ID
			'Code', // Name
			array('description'=>"Code", )
		);
	}

	public function widget( $args, $instance ) {
		$parents = get_post_ancestors( get_the_ID() );
		if($parents[0] == 148){
			?>
			<div class="sidebarimagebox">
				<div class="code_wrapper">
					<img src="<?php echo get_template_directory_uri(); ?>/images/code.jpg" alt="code" />
					<div class="code">
						<?php echo $instance['description']; ?>	<span class="code_text"><?php echo $instance['code']; ?></span>
					</div>
				</div>
			</div>
			<div class="sidebarimageboxshadow">
				<img src="<?php echo get_template_directory_uri(); ?>/images/sidebarimageshadow.png" />
			</div>
			<br/>
			<?php
		}
	}

	public function update( $new_instance, $old_instance ) {
		$instance = $new_instance;
    
		return $instance;
	}

	public function form( $instance ) {
	?>
		<p>
			Description:
			<input type="text" name="<?php echo $this->get_field_name('description'); ?>"
			       value="<?php echo $instance['description']; ?>" />
		</p>
		<p>
			Code:
			<input type="text" name="<?php echo $this->get_field_name('code'); ?>"
			       value="<?php echo $instance['code']; ?>" />
		</p>
	<?php
	}
}