<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta name="theme-color" content="#eaf2f7">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Roboto+Slab&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header id="header" class="js-header" itemscope itemtype="http://schema.org/WPHeader">
        <div class="container">
            <div class="row">
                <div class="navbar">
                    <?php get_template_part('templates-parts/header/header', 'brand'); ?>
                    <?php get_template_part('templates-parts/header/header', 'nav'); ?>
                    <?php // wp-get_template_part('templates-parts/header/header', 'lang-swicher'); ?>
                    <?php get_template_part('templates-parts/header/header', 'contact'); ?>
                    <?php get_template_part('templates-parts/header/header', 'burger'); ?>
                </div>
                <?php if(get_field('display_secundary_menu') && !wp_is_mobile()) { ?>
                <?php get_template_part('templates-parts/header/header', 'second-menu'); ?>
                <?php } ?>
            </div>
        </div>
    </header>

    <main id="main">
        <div class="container">
            <div class="row">
