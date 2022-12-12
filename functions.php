<?php
add_theme_support('post-thumbnails');
add_image_size( 'logo', 200, 62, array( 'center', 'center' ) );
add_image_size( 'oferta', 425, 190, array( 'center', 'center' ) );

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

function go_scripts() {
	wp_enqueue_style( 'go-style', get_stylesheet_uri() );
	wp_enqueue_style( 'go-custome-style', get_template_directory_uri().'/src/css/go-main.min.css' ); 
	wp_enqueue_script('go-main', get_template_directory_uri().'/src/js/go-main.js', array( 'jquery' ),'3', true );
    wp_enqueue_style( 'go-svipeer_css', 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css' );
    wp_enqueue_script('go-swiper_js', 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js',  array(), '20130456', true );

    // wp_enqueue_style( 'go-aos_css', 'https://unpkg.com/aos@2.3.1/dist/aos.css' );
    // wp_enqueue_script('go-aos_js', 'https://unpkg.com/aos@2.3.1/dist/aos.js',  array(), '20130456', true );
	if ( is_page(50) ) {
	 wp_enqueue_script( 'go-home', get_template_directory_uri() . '/src/js/home-page.js', array(), '20130457', true );
	}
}
add_action( 'wp_enqueue_scripts', 'go_scripts' );
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



