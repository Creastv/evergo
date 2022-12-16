<?php
add_theme_support('post-thumbnails');
add_image_size( 'person', 100, 100, array( 'center', 'center' ) );
add_image_size( 'icon', 45, 45, array( 'center', 'center' ) );
add_image_size( 'logo', 200, 200 );
add_image_size( 'post', 700, 390, array( 'center', 'center' ) );

if ( ! function_exists( 'go_register_nav_menu' ) ) {
    function go_register_nav_menu(){
        register_nav_menus( array(
            'primary_menu' => __( 'Primary Menu', 'go' ),
        ) );
    }
    add_action( 'after_setup_theme', 'go_register_nav_menu', 0 );
}
function cr_widgets_init() {

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'go' ),
		'id'            => 'footer-1',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title-fo">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer 2', 'go' ),
		'id'            => 'footer-2',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title-fo">',
		'after_title'   => '</h4>',
	) );
    register_sidebar( array(
		'name'          => __( 'Sidebar', 'go' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title-fo">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'cr_widgets_init' );

require_once get_template_directory() . '/func/enqueue-styles.php';
require_once get_template_directory() . '/func/enqueue-scripts.php';
require get_template_directory() . '/func/clean-up.php';
require get_template_directory() . '/func/cpt.php';


if ( function_exists( 'acf_add_options_page' ) ) {

	acf_add_options_page( array(
		'page_title' => 'Evergo',
		'menu_title' => 'Evergo',
		'menu_slug'  => 'theme-general-settings',
		'capability' => 'edit_posts',
		'redirect'   => false
	) );

}

// Paginacja
function pagination_bars() {
    global $wp_query;
 
    $total_pages = $wp_query->max_num_pages;
	$big = 999999999; // need an unlikely integer
    if ($total_pages > 1){
        $current_page = max(1, get_query_var('paged'));
		echo paginate_links(array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => $current_page,
            'total' => $total_pages,
        ));
    }
}
