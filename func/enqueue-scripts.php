<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function enqueue_scripts() {
    wp_enqueue_script('go-main', get_template_directory_uri().'/src/js/go-main.js', array( 'jquery' ),'3', true );
    
    if(is_page(array(10, 876))){ //Home
        wp_enqueue_script('go-swiper_js', 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js',  array(), '20130456', true );
        wp_enqueue_script('go-slider', get_template_directory_uri().'/src/js/go-slider.js', array( 'jquery' ),'5', true );
        wp_enqueue_script('go-testimonial', get_template_directory_uri().'/src/js/go-testimonial.js', array( 'jquery' ),'4', true );
        wp_enqueue_script('go-logos', get_template_directory_uri().'/src/js/go-logos.js', array( 'jquery' ),'6', true );
    }
    if(is_page(array(17, 886))){ //About US
        wp_enqueue_script('go-swiper_js', 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js',  array(), '20130456', true );
        wp_enqueue_script('go-testimonial', get_template_directory_uri().'/src/js/go-testimonial.js', array( 'jquery' ),'4', true );
    }
    if(is_page(array(21, 899))){ //Case study
        wp_enqueue_script('go-swiper_js', 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js',  array(), '20130456', true );
        wp_enqueue_script('go-testimonial-2', get_template_directory_uri().'/src/js/go-testimonial-2.js', array( 'jquery' ),'4', true );
    }
    if ( is_page_template( 'page-service.php' ) ) {
        wp_enqueue_script('go-swiper_js', 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js',  array(), '20130456', true );
        wp_enqueue_script('go-testimonial-2', get_template_directory_uri().'/src/js/go-testimonial-2.js', array( 'jquery' ),'4', true );
    }
    if (is_page(array(19, 895))){ //service
        wp_enqueue_script('go-swiper_js', 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js',  array(), '20130456', true );
        wp_enqueue_script('go-testimonial', get_template_directory_uri().'/src/js/go-testimonial.js', array( 'jquery' ),'4', true );
    }
}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );
