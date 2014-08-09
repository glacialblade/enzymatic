<?php
	function cp_testimonial() {
		$labels = array(
			'name'               => 'Testimonials',
			'singular_name'      => 'Testimonial',
			'menu_name'          => 'Testimonials',
			'name_admin_bar'     => 'Testimonial',
			'add_new'            => 'Add New',
			'add_new_item'       => 'Add New Testimonial',
			'new_item'           => 'New Testimonial',
			'edit_item'          => 'Edit Testimonial',
			'view_item'          => 'View Testimonial',
			'all_items'          => 'All Testimonials',
			'search_items'       => 'Search Testimonials',
			'parent_item_colon'  => 'Parent Testimonials:',
			'not_found'          => 'No Testimonials found.',
			'not_found_in_trash' => 'No Testimonials found in Trash.'
		);

		$args = array(
			'labels'             => $labels,
			'public'             => false,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'testimonial' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'exclude_from_search'=> false,
			'supports'           => array( 'title','thumbnail','editor','excerpt','page-attributes')
		);

		register_post_type( 'testimonial', $args );
	}
	add_action('init','cp_testimonial');
?>