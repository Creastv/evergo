<?php
function register_acf_block_types() {
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
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'ra-hero',  get_template_directory_uri() . '/blocks/banner/banner.min.css' );
      },
    ));
    }
if( function_exists('acf_register_block_type') ) {
    add_action('acf/init', 'register_acf_block_types');
}
