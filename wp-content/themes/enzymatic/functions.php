<?php
	function enzymatic_init(){
		require_includes();
		enzymatic_widgets();

		add_editor_style(array("css/editor-style.css"));
		add_theme_support("post-thumbnails");

		register_nav_menus( array(
			"header" => __("Header Menu","enzymatic"),
			"footer" =>__ ("Footer Menu","enzymatic"),
		));
	}
	add_action( "after_setup_theme", "enzymatic_init" );

	function enzymatic_widgets(){
		require( get_template_directory() . '/includes/widgets/imagelink/index.php' );

		register_widget( 'ImageLinks' );
		register_sidebar( array(
			'name' => __('Sidebar'),
			'id' => 'sidebar',
			'before_widget' => '',
			'after_widget' => "",
			'before_title' => '',
			'after_title' => '',
		) );
	}


	function enzymatic_mainscripts(){
		wp_enqueue_style("style",get_stylesheet_uri());
		wp_enqueue_script("banner",get_template_directory_uri()."/js/banner.js",array("jquery"));
		wp_enqueue_script("scripts",get_template_directory_uri()."/js/scripts.js",array("jquery"));
	}
	add_action("wp_enqueue_scripts","enzymatic_mainscripts");

	function require_includes(){
		require_once get_template_directory()."/includes/customposts/banner.php";
		// require_once get_template_directory()."/includes/customposts/testimonial.php";
		// require_once get_template_directory()."/includes/customposts/team.php";

		require_once get_template_directory()."/includes/themesettings/index.php";
		require_once get_template_directory()."/includes/cmb/index.php";
		require_once get_template_directory()."/includes/disablecomments.php";
	}

	function enzymatic_login(){ ?><style type="text/css">body.login div#login{margin-top:-50px;}body.login div#login h1 a {background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png);background-size: 237px 163px;display:block;width:237px;height:163px;}</style><?php }
	add_action( 'login_enqueue_scripts', 'enzymatic_login' );

	function get_image($image,$title){
		$imageurl = get_template_directory_uri()."/images/";
		echo "<img src='".$imageurl.$image."' alt='".$title."' title='".$title."'>";
	}
	function enzymatic_setting($setting,$key){
		$values = get_option($setting);
		return $values[$key];
	}
?>

