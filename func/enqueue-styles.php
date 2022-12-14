<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
function enqueue_styles() {
    wp_enqueue_style( 'go-style', get_stylesheet_uri() );
	wp_enqueue_style( 'go-custome-style', get_template_directory_uri().'/src/css/go-main.min.css' ); 
    if(is_page(array(10))){ //home
       wp_enqueue_style( 'go-swipeer_css', 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css' );
       wp_enqueue_style( 'go-testimonial', get_template_directory_uri().'/src/css/scss/parts/testimonial/testimonial.css' ); 
       wp_enqueue_style( 'go-numbers', get_template_directory_uri().'/src/css/scss/parts/numbers/numbers.min.css' ); 
       wp_enqueue_style( 'go-areas', get_template_directory_uri().'/src/css/scss/parts/areas/business-areas.min.css' ); 
    }
    if(is_page(array(17))){ //about-us
       wp_enqueue_style( 'go-swipeer_css', 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css' );
       wp_enqueue_style( 'go-testimonial', get_template_directory_uri().'/src/css/scss/parts/testimonial/testimonial.min.css' ); 
       wp_enqueue_style( 'go-numbers', get_template_directory_uri().'/src/css/scss/parts/numbers/numbers.min.css' ); 
       wp_enqueue_style( 'go-areas', get_template_directory_uri().'/src/css/scss/parts/areas/business-areas.min.css' ); 
    }
}
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );
