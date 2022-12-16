<?php 
//////////////////////////////////////////////////////////////offers
function go_post_types_case_study() {

	$labels = array(
		'name'               => 'Case study',
		'singular_name'      => 'Case study',
		'menu_name'          => 'Case study',
		'name_admin_bar'     => 'Case study',
		'all_items'          => 'Case study',
	);

	$args = array( 
	    'public' => true,
		'has_archive' => false,
		'show_in_rest' => true,
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'publicly_queryable' => true,
		'show_in_rest' => true,
		"rewrite"             => array( "slug" => "case-study", "with_front" => true ),
		'supports'      => array( 'title', 'page-attributes', 'thumbnail', 'editor' ),
		// , 'editor' 
	);
    register_post_type( 'case-study', $args );

}
add_action( 'init', 'go_post_types_case_study' );

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
