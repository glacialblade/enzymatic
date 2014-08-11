<?php
	add_filter('cmb_meta_boxes','aboutus');
	function aboutus(array $meta_boxes) {
		$meta_boxes['footervalue'] = array(
			'id'         => 'Footer Value',
			'title'      => __( 'Footer Value', 'cmb' ),
			'pages'      => array('page',),
			'show_on'    => array('key'=>'id','value'=>array( 7,27, ), ),
			'context'    => 'normal',
			'priority'   => 'high',
			'show_names' => false, 
			"desc"       => "asdf",
			'fields'     => array(
				array(
					'name' => "footervalue",
					'id'   => "footervalue",
					'type' => 'textarea',
				)
			)
		);

		return $meta_boxes;
	}

	add_action('init','cmb_initialize_cmb_meta_boxes', 9999);
	function cmb_initialize_cmb_meta_boxes() {
		if ( ! class_exists( 'cmb_Meta_Box' ) )
			require_once get_template_directory()."/includes/cmb/lib/init.php";
	}
?>