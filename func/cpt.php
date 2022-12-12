<?php 
// //////////////////////////////////////////////////////////////offers
// function go_post_types_offers() {

// 	$labels = array(
// 		'name'               => 'Offers',
// 		'singular_name'      => 'Offers',
// 		'menu_name'          => 'Offers',
// 		'name_admin_bar'     => 'Offers',
// 		'all_items'          => 'Offers',
// 	);

// 	$args = array( 
// 	    'public' => true,
// 		'has_archive' => false,
// 		'show_in_rest' => true,
// 		'hierarchical'      => true,
// 		'labels'            => $labels,
// 		'show_ui'           => true,
// 		'show_admin_column' => true,
// 		'query_var'         => true,
// 		'publicly_queryable' => true,
// 		'show_in_rest' => true,
// 		"rewrite"             => array( "slug" => "offers", "with_front" => true ),
// 		'supports'      => array( 'title', 'page-attributes', 'thumbnail', 'editor' ),
// 		// , 'editor' 
// 	);
//     register_post_type( 'offers', $args );

// }
// add_action( 'init', 'go_post_types_offers' );

// //////////////////////////////////////////////////////////////Projects
// function go_post_types_projects() {

// 	$labels = array(
// 		'name'               => 'Projects',
// 		'singular_name'      => 'Project',
// 		'menu_name'          => 'Projects',
// 		'name_admin_bar'     => 'Projects',
// 		'all_items'          => 'Projects',
// 	);

// 	$args = array( 
// 	    'public' => true,
// 		'has_archive' => false,
// 		'show_in_rest' => true,
// 		'hierarchical'      => true,
// 		'labels'            => $labels,
// 		'show_ui'           => true,
// 		'show_admin_column' => true,
// 		'query_var'         => true,
// 		'publicly_queryable' => true,
// 		'show_in_rest' => true,
// 		"rewrite"             => array( "slug" => "Projects", "with_front" => true ),
// 		'supports'      => array( 'title', 'page-attributes', 'thumbnail', 'editor' ),
// 		// , 'editor' 
// 	);
//     register_post_type( 'projects', $args );

// }
// add_action( 'init', 'go_post_types_projects' );