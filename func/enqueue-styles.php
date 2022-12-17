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
       wp_enqueue_style( 'go-about-us', get_template_directory_uri().'/src/css/scss/parts/about-us/about-us.min.css' ); 
       wp_enqueue_style( 'go-logos', get_template_directory_uri().'/src/css/scss/parts/logos/logos.min.css' ); 
       wp_enqueue_style( 'go-opinion', get_template_directory_uri().'/src/css/scss/parts/opinion/opinion.min.css' ); 
       wp_enqueue_style( 'go-slider', get_template_directory_uri().'/src/css/scss/parts/slider/slider.min.css' ); 
    }
    if(is_page(array(17))){ //about-us
       wp_enqueue_style( 'go-swipeer_css', 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css' );
       wp_enqueue_style( 'go-testimonial', get_template_directory_uri().'/src/css/scss/parts/testimonial/testimonial.min.css' ); 
       wp_enqueue_style( 'go-numbers', get_template_directory_uri().'/src/css/scss/parts/numbers/numbers.min.css' ); 
       wp_enqueue_style( 'go-areas', get_template_directory_uri().'/src/css/scss/parts/areas/business-areas.min.css' );
       wp_enqueue_style( 'go-about-us-ext', get_template_directory_uri().'/src/css/scss/parts/about-us/about-us-ext.min.css' ); 
    }
    if(is_page(array(21))){ //case studys
        wp_enqueue_style( 'go-swipeer_css', 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css' );
        wp_enqueue_style( 'go-cases', get_template_directory_uri().'/src/css/scss/parts/cases/cases.min.css' ); 
        wp_enqueue_style( 'go-banner', get_template_directory_uri().'/src/css/scss/parts/banner/banner.min.css' ); 
        wp_enqueue_style( 'go-testimonial-2', get_template_directory_uri().'/src/css/scss/parts/testimonial-2/testimonial-2.min.css' ); 
    }
     if ( is_page_template( 'page-service.php' ) ) {
        wp_enqueue_style( 'go-swipeer_css', 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css' );
        wp_enqueue_style( 'go-cases', get_template_directory_uri().'/src/css/scss/parts/cases/cases.min.css' ); 
        wp_enqueue_style( 'go-banner', get_template_directory_uri().'/src/css/scss/parts/banner/banner.min.css' ); 
        wp_enqueue_style( 'go-testimonial-2', get_template_directory_uri().'/src/css/scss/parts/testimonial-2/testimonial-2.min.css' ); 
     }
    if (is_page(19)){ //service
        wp_enqueue_style( 'go-swipeer_css', 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css' );
        wp_enqueue_style( 'go-areas', get_template_directory_uri().'/src/css/scss/parts/areas/business-areas.min.css' );
        wp_enqueue_style( 'go-testimonial', get_template_directory_uri().'/src/css/scss/parts/testimonial/testimonial.min.css' );  
    }
    if(is_singular('case-study')){ //Case study
        wp_enqueue_style( 'go-actions-effects', get_template_directory_uri().'/src/css/scss/parts/actions-effects/actions-effects.min.css' ); 
    }
}
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );
