<?php
	function cp_team() {
		$labels = array(
			'name'               => 'Teams',
			'singular_name'      => 'Team',
			'menu_name'          => 'Teams',
			'name_admin_bar'     => 'Team',
			'add_new'            => 'Add New',
			'add_new_item'       => 'Add New Team',
			'new_item'           => 'New Team',
			'edit_item'          => 'Edit Team',
			'view_item'          => 'View Team',
			'all_items'          => 'All Teams',
			'search_items'       => 'Search Teams',
			'parent_item_colon'  => 'Parent Teams:',
			'not_found'          => 'No Teams found.',
			'not_found_in_trash' => 'No Teams found in Trash.'
		);

		$args = array(
			'labels'             => $labels,
			'public'             => false,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'team' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'exclude_from_search'=> false,
			'supports'           => array( 'title','thumbnail','editor','page-attributes')
		);

		register_post_type( 'team', $args );
	}
	add_action('init','cp_team');
?>