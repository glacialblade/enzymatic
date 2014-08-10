<?php
class ImageLinks extends WP_Widget {
	public function __construct() {
		parent::__construct(
	 		'imagelinks', // Base ID
			'ImageLinks', // Name
			array('description'=>"Content for sidebar", )
		);

		wp_enqueue_script('jquery');
        wp_enqueue_script('thickbox');
        wp_enqueue_script('media-upload');

        wp_enqueue_style('thickbox');
        wp_enqueue_script('imagelinkuploader',get_template_directory_uri()."/includes/widgets/imagelink/js/imagelinkuploader.js",array("jquery"));
	}

	public function widget( $args, $instance ) {
		?>
		<div class="sidebarimagebox">
			<a href="<?php echo $instance['link']; ?>">
				<img src="<?php echo $instance['image']; ?>" alt="image">
			</a>
		</div>
		<div class="sidebarimageboxshadow">
			<img src="<?php echo get_template_directory_uri(); ?>/images/sidebarimageshadow.png" />
		</div>
		<br/>
		<?php
	}

	public function update( $new_instance, $old_instance ) {
		$instance = $new_instance;
		// $instance['link']  = strip_tags($new_instance['link']);
		// $instance['image'] = strip_tags($new_instance['image']);
	    //$instance['quicklink_texttitle'] = strip_tags($new_instance['quicklink_texttitle']);
    
		return $instance;
	}

	public function form( $instance ) {
	?>
		<p>
			Link:
			<input type="text" name="<?php echo $this->get_field_name('link'); ?>"
			       value="<?php echo $instance['link']; ?>" />
		</p>
		<p>
			<input id="imagelink" type="text" name="<?php echo $this->get_field_name('image'); ?>"
			       value="<?php echo $instance['image']; ?>" />
			<input id="chooseimage" type="button" class="button" value="Choose Image" />
			<br/><br/>
			<img id="imagelinkpreview" src="<?php echo $instance['image']; ?>"/>
		</p>
	<?php
	}
}