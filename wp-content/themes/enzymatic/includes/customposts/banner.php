<?php
	function cp_banner() {
		$labels = array(
			'name'               => 'Banners',
			'singular_name'      => 'Banner',
			'menu_name'          => 'Banners',
			'name_admin_bar'     => 'Banner',
			'add_new'            => 'Add New',
			'add_new_item'       => 'Add New Banner',
			'new_item'           => 'New Banner',
			'edit_item'          => 'Edit Banner',
			'view_item'          => 'View Banner',
			'all_items'          => 'All Banners',
			'search_items'       => 'Search Banners',
			'parent_item_colon'  => 'Parent Banners:',
			'not_found'          => 'No Banners found.',
			'not_found_in_trash' => 'No Banners found in Trash.'
		);

		$args = array(
			'labels'             => $labels,
			'public'             => false,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'banner' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'exclude_from_search'=> false,
			'supports'           => array( 'title','thumbnail','excerpt','page-attributes')
		);

		register_post_type( 'banner', $args );
	}
	add_action('init','cp_banner');
?>