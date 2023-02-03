<?php
function register_acf_block_types() {
  //Done
    acf_register_block_type(array(
        'name'              => 'post_banner',
        'title'             => __('Post - banner'),
        'render_template'   => 'blocks/banner/block-baner.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#e70680',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'hero' ),
      'supports' => array( 'align' =>false ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'ra-hero',  get_template_directory_uri() . '/blocks/banner/banner.min.css' );
      },
    ));
    
    //Done
    acf_register_block_type(array(
        'name'              => 'ra_bl_numbers',
        'title'             => __('Numbers'),
        'render_template'   => 'templates-parts/parts/numbers.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#e70680',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'Numbers' ),
      'supports' => array( 'align' =>false ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'ra-numbers',  get_template_directory_uri() . '/src/css/scss/parts/numbers/numbers.min.css' );
      },
    ));

    acf_register_block_type(array(
        'name'              => 'ra_bl_about-us',
        'title'             => __('About-us'),
        'render_template'   => 'templates-parts/parts/about-us.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#e70680',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'about-us' ),
      'supports' => array( 'align' =>false ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'ra-about-us',  get_template_directory_uri() . '/src/css/scss/parts/about-us/about-us.min.css' );
      },
    ));
    acf_register_block_type(array(
        'name'              => 'ra_bl_about-us-ex',
        'title'             => __('About-us - ext'),
        'render_template'   => 'templates-parts/parts/about-us-ext.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#e70680',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'about-us - ext' ),
      'supports' => array( 'align' =>false ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'ra-about-ex-us',  get_template_directory_uri() . '/src/css/scss/parts/about-us/about-us-ext.min.css' );
      },
    ));
    acf_register_block_type(array(
        'name'              => 'ra_bl_actions-effects',
        'title'             => __('Center numbers'),
        'render_template'   => 'templates-parts/parts/actions-effects.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#e70680',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'numbers' ),
      'supports' => array( 'align' =>false ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'ra-center-numbers-us',  get_template_directory_uri() . '/src/css/scss/parts/actions-effects/actions-effects.min.css' );
      },
    ));
    acf_register_block_type(array(
        'name'              => 'ra_bl_articles',
        'title'             => __('Posts'),
        'render_template'   => 'templates-parts/parts/posts.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#e70680',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'Articles' ),
      'supports' => array( 'align' =>false ),
      // 'enqueue_assets'    => function(){
      //     wp_enqueue_style( 'ra-about-us',  get_template_directory_uri() . '/src/css/scss/parts/actions-effects/actions-effects.min.css' );
      // },
    ));
    acf_register_block_type(array(
        'name'              => 'ra_bl_business-areas',
        'title'             => __('Business areas'),
        'render_template'   => 'templates-parts/parts/business-areas.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#e70680',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'business-areas' ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'ra-areas-us',  get_template_directory_uri() . '/src/css/scss/parts/areas/business-areas.min.css' );
      },
      'supports' => array( 'align' =>false ),
    ));
     acf_register_block_type(array(
        'name'              => 'ra_bl_case-study',
        'title'             => __('Case Study'),
        'render_template'   => 'templates-parts/parts/case-study.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#e70680',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'case-study' ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'ra-case-study-us',  get_template_directory_uri() . '/src/css/scss/parts/cases/cases.min.css' );
      },
      'supports' => array( 'align' =>false ),
    ));
     acf_register_block_type(array(
        'name'              => 'ra_bl_Form',
        'title'             => __('Custome form'),
        'render_template'   => 'templates-parts/parts/custome-form.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#e70680',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'services' ),
      'supports' => array( 'align' =>false ),
      // 'enqueue_assets'    => function(){
      //     wp_enqueue_style( 'ra-about-us',  get_template_directory_uri() . '/src/css/scss/parts/contact-us/contact-us.min.css' );
      // },
    ));
    acf_register_block_type(array(
        'name'              => 'ra_bl_testymonial',
        'title'             => __('Testymonial'),
        'render_template'   => 'templates-parts/parts/testimonial.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#e70680',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'Testymonial' ),
      'supports' => array( 'align' =>false ),
      'enqueue_assets'    => function(){
        wp_enqueue_style( 'go-swipeer_css', 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css' );
        wp_enqueue_script('go-swiper_js', 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js',  array(), '20130456', true );
        wp_enqueue_script('go-testimonial', get_template_directory_uri().'/src/js/go-testimonial.js', array( 'jquery' ),'4', true );
        wp_enqueue_style( 'ra-testymonial',  get_template_directory_uri() . '/src/css/scss/parts/testimonial/testimonial.min.css' );
      },
    ));
     acf_register_block_type(array(
        'name'              => 'ra_bl_testymonial2',
        'title'             => __('Testymonial 2'),
        'render_template'   => 'templates-parts/parts/testimonial-2.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#e70680',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'Testymonial' ),
      'supports' => array( 'align' =>false ),
      'enqueue_assets'    => function(){
        wp_enqueue_style( 'go-swipeer_css', 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css' );
        wp_enqueue_script('go-swiper_js', 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js',  array(), '20130456', true );
        wp_enqueue_script('go-testimonial-2', get_template_directory_uri().'/src/js/go-testimonial-2.js', array( 'jquery' ),'4', true );
        wp_enqueue_style( 'ra-testymonial-2',  get_template_directory_uri() . '/src/css/scss/parts/testimonial-2/testimonial-2.min.css' );
      },
    ));
     acf_register_block_type(array(
        'name'              => 'ra_bl_logos',
        'title'             => __('Logos'),
        'render_template'   => 'templates-parts/parts/logos.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#e70680',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'logos' ),
      'supports' => array( 'align' =>false ),
      'enqueue_assets'    => function(){
        wp_enqueue_style( 'go-swipeer_css', 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css' );
        wp_enqueue_script('go-swiper_js', 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js',  array(), '20130456', true );
        wp_enqueue_script('go-logos', get_template_directory_uri().'/src/js/go-logos.js', array( 'jquery' ),'4', true );
        wp_enqueue_style( 'ra-logos',  get_template_directory_uri() . '/src/css/scss/parts/logos/logos.min.css' );
      },
        acf_register_block_type(array(
          'name'              => 'ra_bl_opinia',
          'title'             => __('Custome form'),
          'render_template'   => 'templates-parts/parts/opinion.php',
          'category'          => 'formatting',
          'icon' => array(
            'background' => '#e70680',
            'foreground' => '#fff',
            'src' => 'ellipsis',
          ),
        'mode'            => 'preview', 
        'keywords'          => array( 'services' ),
        'supports' => array( 'align' =>false ),
        'enqueue_assets'    => function(){
            wp_enqueue_style( 'ra-opinion',  get_template_directory_uri() . '/src/css/scss/parts/opinion/opinion.min.css' );
        },
         acf_register_block_type(array(
          'name'              => 'ra_bl_slider',
          'title'             => __('Slider'),
          'render_template'   => 'templates-parts/parts/slider.php',
          'category'          => 'formatting',
          'icon' => array(
            'background' => '#e70680',
            'foreground' => '#fff',
            'src' => 'ellipsis',
          ),
        'mode'            => 'preview', 
        'keywords'          => array( 'Slider' ),
        'supports' => array( 'align' =>false ),
        'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-swipeer_css', 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css' );
          wp_enqueue_script('go-swiper_js', 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js',  array(), '20130456', true );
          wp_enqueue_script('go-slider', get_template_directory_uri().'/src/js/go-slider.js', array( 'jquery' ),'4', true );
          wp_enqueue_style( 'ra-slider',  get_template_directory_uri() . '/src/css/scss/parts/slider/slider.min.css' );
        },
      ));
      ));
    ));
    }
if( function_exists('acf_register_block_type') ) {
    add_action('acf/init', 'register_acf_block_types');
}
