// Register Custom Post Type
function tvd_register_tutorial_post_type() {

	$labels = array(
		'name'                  => _x( 'Tutorials', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Tutorial', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Tutorials', 'text_domain' ),
		'name_admin_bar'        => __( 'Tutorials', 'text_domain' ),
		'archives'              => __( 'Tutorial Archives', 'text_domain' ),
		'attributes'            => __( 'Tutorial Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Tutorial:', 'text_domain' ),
		'all_items'             => __( 'All Tutorials', 'text_domain' ),
		'add_new_item'          => __( 'Add New Tutorial', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Tutorial', 'text_domain' ),
		'edit_item'             => __( 'Edit Tutorial', 'text_domain' ),
		'update_item'           => __( 'Update Tutorial', 'text_domain' ),
		'view_item'             => __( 'View Tutorial', 'text_domain' ),
		'view_items'            => __( 'View Tutorials', 'text_domain' ),
		'search_items'          => __( 'Search Tutorial', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Tutorials list', 'text_domain' ),
		'items_list_navigation' => __( 'Tutorials list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter tutorials list', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                  => 'tutorial',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$capabilities = array(
		'edit_post'             => 'edit_tutorial',
		'read_post'             => 'read_tutorial',
		'delete_post'           => 'delete_tutorial',
		'edit_posts'            => 'edit_tutorials',
		'edit_others_posts'     => 'edit_others_tutorials',
		'publish_posts'         => 'publish_tutorials',
		'read_private_posts'    => 'read_private_tutorial',
	);
	$args = array(
		'label'                 => __( 'Tutorial', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'custom-fields', 'page-attributes', 'post-formats' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-welcome-learn-more',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'query_var'             => 'tutorial',
		'rewrite'               => $rewrite,
		'capabilities'          => $capabilities,
	);
	register_post_type( 'tutorial', $args );

}
add_action( 'init', 'tvd_register_tutorial_post_type', 0 );
