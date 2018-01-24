<?php
if ( ! function_exists( 'educrm_register_post_types' ) ) {

	add_action( 'init', 'educrm_register_post_types' );

	function educrm_register_post_types() {

		$labels = array(
			'name'                  => _x( 'Consultancy', 'Consultancy General Name', 'educrm' ),
			'singular_name'         => _x( 'Consultancy', 'Consultancy Singular Name', 'educrm' ),
			'menu_name'             => __( 'Consultancy', 'educrm' ),
			'name_admin_bar'        => __( 'Consultancy', 'educrm' ),
			'archives'              => __( 'Item Archives', 'educrm' ),
			'attributes'            => __( 'Item Attributes', 'educrm' ),
			'parent_item_colon'     => __( 'Parent Item:', 'educrm' ),
			'all_items'             => __( 'All Items', 'educrm' ),
			'add_new_item'          => __( 'Add New Item', 'educrm' ),
			'add_new'               => __( 'Add New', 'educrm' ),
			'new_item'              => __( 'New Item', 'educrm' ),
			'edit_item'             => __( 'Edit Item', 'educrm' ),
			'update_item'           => __( 'Update Item', 'educrm' ),
			'view_item'             => __( 'View Item', 'educrm' ),
			'view_items'            => __( 'View Items', 'educrm' ),
			'search_items'          => __( 'Search Item', 'educrm' ),
			'not_found'             => __( 'Not found', 'educrm' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'educrm' ),
			'featured_image'        => __( 'Featured Image', 'educrm' ),
			'set_featured_image'    => __( 'Set featured image', 'educrm' ),
			'remove_featured_image' => __( 'Remove featured image', 'educrm' ),
			'use_featured_image'    => __( 'Use as featured image', 'educrm' ),
			'insert_into_item'      => __( 'Insert into item', 'educrm' ),
			'uploaded_to_this_item' => __( 'Uploaded to this item', 'educrm' ),
			'items_list'            => __( 'Items list', 'educrm' ),
			'items_list_navigation' => __( 'Items list navigation', 'educrm' ),
			'filter_items_list'     => __( 'Filter items list', 'educrm' ),
		);
		$args = array(
		  'label'                 => __( 'Consultancy', 'educrm' ),
		  'description'           => __( 'Consultancy Description', 'educrm' ),
		  'labels'                => $labels,
		  'supports'              => array(),
		  'taxonomies'            => array(),
		  'hierarchical'          => false,
		  'public'                => true,
		  'show_ui'               => true,
		  'show_in_menu'          => true,
		  'menu_position'         => 5,
		  'show_in_admin_bar'     => true,
		  'show_in_nav_menus'     => true,
		  'can_export'            => true,
		  'has_archive'           => false,
		  'exclude_from_search'   => true,
		  'publicly_queryable'    => true,
		  'rewrite'               => array( 'slug' => 'consultancies' ),
		  'capability_type'       => 'post',
		  'menu_icon'             => 'dashicons-admin-multisite',
		);

		register_post_type( 'consultancy', $args );

		$labels = array(
		'name'                  => _x( 'Agents', 'Agent General Name', 'educrm' ),
		'singular_name'         => _x( 'Agent', 'Agent Singular Name', 'educrm' ),
		'menu_name'             => __( 'Agents', 'educrm' ),
		'name_admin_bar'        => __( 'Agent', 'educrm' ),
		'archives'              => __( 'Item Archives', 'educrm' ),
		'attributes'            => __( 'Item Attributes', 'educrm' ),
		'parent_item_colon'     => __( 'Parent Item:', 'educrm' ),
		'all_items'             => __( 'All Items', 'educrm' ),
		'add_new_item'          => __( 'Add New Item', 'educrm' ),
		'add_new'               => __( 'Add New', 'educrm' ),
		'new_item'              => __( 'New Item', 'educrm' ),
		'edit_item'             => __( 'Edit Item', 'educrm' ),
		'update_item'           => __( 'Update Item', 'educrm' ),
		'view_item'             => __( 'View Item', 'educrm' ),
		'view_items'            => __( 'View Items', 'educrm' ),
		'search_items'          => __( 'Search Item', 'educrm' ),
		'not_found'             => __( 'Not found', 'educrm' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'educrm' ),
		'featured_image'        => __( 'Featured Image', 'educrm' ),
		'set_featured_image'    => __( 'Set featured image', 'educrm' ),
		'remove_featured_image' => __( 'Remove featured image', 'educrm' ),
		'use_featured_image'    => __( 'Use as featured image', 'educrm' ),
		'insert_into_item'      => __( 'Insert into item', 'educrm' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'educrm' ),
		'items_list'            => __( 'Items list', 'educrm' ),
		'items_list_navigation' => __( 'Items list navigation', 'educrm' ),
		'filter_items_list'     => __( 'Filter items list', 'educrm' ),
		);
		$args = array(
		'label'                 => __( 'Agent', 'educrm' ),
		'description'           => __( 'Agent Description', 'educrm' ),
		'labels'                => $labels,
		'taxonomies'            => array(),
		'supports'              => array(),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'rewrite'               => array( 'slug' => 'agents' ),
		'menu_icon'             => 'dashicons-businessman',
		);

		register_post_type( 'agent', $args );

		$labels = array(
		'name'                  => _x( 'Institutions', 'Institution General Name', 'educrm' ),
		'singular_name'         => _x( 'Institution', 'Institution Singular Name', 'educrm' ),
		'menu_name'             => __( 'Institutions', 'educrm' ),
		'name_admin_bar'        => __( 'Institution', 'educrm' ),
		'archives'              => __( 'Item Archives', 'educrm' ),
		'attributes'            => __( 'Item Attributes', 'educrm' ),
		'parent_item_colon'     => __( 'Parent Item:', 'educrm' ),
		'all_items'             => __( 'All Items', 'educrm' ),
		'add_new_item'          => __( 'Add New Item', 'educrm' ),
		'add_new'               => __( 'Add New', 'educrm' ),
		'new_item'              => __( 'New Item', 'educrm' ),
		'edit_item'             => __( 'Edit Item', 'educrm' ),
		'update_item'           => __( 'Update Item', 'educrm' ),
		'view_item'             => __( 'View Item', 'educrm' ),
		'view_items'            => __( 'View Items', 'educrm' ),
		'search_items'          => __( 'Search Item', 'educrm' ),
		'not_found'             => __( 'Not found', 'educrm' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'educrm' ),
		'featured_image'        => __( 'Featured Image', 'educrm' ),
		'set_featured_image'    => __( 'Set featured image', 'educrm' ),
		'remove_featured_image' => __( 'Remove featured image', 'educrm' ),
		'use_featured_image'    => __( 'Use as featured image', 'educrm' ),
		'insert_into_item'      => __( 'Insert into item', 'educrm' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'educrm' ),
		'items_list'            => __( 'Items list', 'educrm' ),
		'items_list_navigation' => __( 'Items list navigation', 'educrm' ),
		'filter_items_list'     => __( 'Filter items list', 'educrm' ),
		);
		$args = array(
		'label'                 => __( 'Institution', 'educrm' ),
		'description'           => __( 'Institution Description', 'educrm' ),
		'labels'                => $labels,
		'taxonomies'            => array(),
		'supports'              => array(),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'rewrite'               => array( 'slug' => 'institutions' ),
		'menu_icon'             => 'dashicons-welcome-learn-more',
		);

		register_post_type( 'institution', $args );

		$labels = array(
		'name'                  => _x( 'Courses', 'Course General Name', 'educrm' ),
		'singular_name'         => _x( 'Course', 'Course Singular Name', 'educrm' ),
		'menu_name'             => __( 'Courses', 'educrm' ),
		'name_admin_bar'        => __( 'Course', 'educrm' ),
		'archives'              => __( 'Item Archives', 'educrm' ),
		'attributes'            => __( 'Item Attributes', 'educrm' ),
		'parent_item_colon'     => __( 'Parent Item:', 'educrm' ),
		'all_items'             => __( 'All Items', 'educrm' ),
		'add_new_item'          => __( 'Add New Item', 'educrm' ),
		'add_new'               => __( 'Add New', 'educrm' ),
		'new_item'              => __( 'New Item', 'educrm' ),
		'edit_item'             => __( 'Edit Item', 'educrm' ),
		'update_item'           => __( 'Update Item', 'educrm' ),
		'view_item'             => __( 'View Item', 'educrm' ),
		'view_items'            => __( 'View Items', 'educrm' ),
		'search_items'          => __( 'Search Item', 'educrm' ),
		'not_found'             => __( 'Not found', 'educrm' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'educrm' ),
		'featured_image'        => __( 'Featured Image', 'educrm' ),
		'set_featured_image'    => __( 'Set featured image', 'educrm' ),
		'remove_featured_image' => __( 'Remove featured image', 'educrm' ),
		'use_featured_image'    => __( 'Use as featured image', 'educrm' ),
		'insert_into_item'      => __( 'Insert into item', 'educrm' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'educrm' ),
		'items_list'            => __( 'Items list', 'educrm' ),
		'items_list_navigation' => __( 'Items list navigation', 'educrm' ),
		'filter_items_list'     => __( 'Filter items list', 'educrm' ),
		);
		$args = array(
		'label'                 => __( 'Course', 'educrm' ),
		'description'           => __( 'Course Description', 'educrm' ),
		'labels'                => $labels,
		'taxonomies'            => array(),
		'supports'              => array(),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'rewrite'               => array( 'slug' => 'courses' ),
		'menu_icon'             => 'dashicons-portfolio',
		);

		register_post_type( 'course', $args );

		$labels = array(
		'name'                  => _x( 'Applications', 'Application General Name', 'educrm' ),
		'singular_name'         => _x( 'Application', 'Application Singular Name', 'educrm' ),
		'menu_name'             => __( 'Applications', 'educrm' ),
		'name_admin_bar'        => __( 'Application', 'educrm' ),
		'archives'              => __( 'Item Archives', 'educrm' ),
		'attributes'            => __( 'Item Attributes', 'educrm' ),
		'parent_item_colon'     => __( 'Parent Item:', 'educrm' ),
		'all_items'             => __( 'All Items', 'educrm' ),
		'add_new_item'          => __( 'Add New Item', 'educrm' ),
		'add_new'               => __( 'Add New', 'educrm' ),
		'new_item'              => __( 'New Item', 'educrm' ),
		'edit_item'             => __( 'Edit Item', 'educrm' ),
		'update_item'           => __( 'Update Item', 'educrm' ),
		'view_item'             => __( 'View Item', 'educrm' ),
		'view_items'            => __( 'View Items', 'educrm' ),
		'search_items'          => __( 'Search Item', 'educrm' ),
		'not_found'             => __( 'Not found', 'educrm' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'educrm' ),
		'featured_image'        => __( 'Featured Image', 'educrm' ),
		'set_featured_image'    => __( 'Set featured image', 'educrm' ),
		'remove_featured_image' => __( 'Remove featured image', 'educrm' ),
		'use_featured_image'    => __( 'Use as featured image', 'educrm' ),
		'insert_into_item'      => __( 'Insert into item', 'educrm' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'educrm' ),
		'items_list'            => __( 'Items list', 'educrm' ),
		'items_list_navigation' => __( 'Items list navigation', 'educrm' ),
		'filter_items_list'     => __( 'Filter items list', 'educrm' ),
		);
		$args = array(
		'label'                 => __( 'Application', 'educrm' ),
		'description'           => __( 'Application Description', 'educrm' ),
		'labels'                => $labels,
		'taxonomies'            => array(),
		'supports'              => array(),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'rewrite'               => array( 'slug' => 'applications' ),
		'menu_icon'             => 'dashicons-email-alt',
		);

		register_post_type( 'application', $args );
	}
}