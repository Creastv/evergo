<?php
if(is_home()) {
$slug = get_page_by_path( 'insights' ); 
$header         = get_field('header', $slug->ID);
$displayHeader  = get_field('display_header', $slug->ID);
} else {
$header         = get_field('header');
$displayHeader  = get_field('display_header');
}
?>
<?php if($displayHeader) { ?>
<header class="t-page <?php echo the_ID()?>">
    <div class="t-page__content">
        <?php if($header['subtitle']) { ?>
        <span class="c-main"><?php echo $header['subtitle']; ?></span>
        <?php } ?>
        <h1 class="entry-title">
            <?php if ( is_category() ) :
					single_cat_title();					
					elseif (is_404()) :
						_e( '404', 'go');
					elseif (is_page() ) :
						the_title();
					elseif ( is_tag() ) :
						single_tag_title();
					elseif ( is_author() ) :
						the_post();
						printf( __( '%s', 'go' ), get_the_author() );
						rewind_posts();
					elseif ( is_day() ) :
						printf( __( 'Dzień: %s', 'go' ), '<span>' . get_the_date() . '</span>' );
					elseif ( is_month() ) :
						printf( __( 'Miesiąc: %s', 'go' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );
					elseif ( is_year() ) :
						printf( __( 'Rok: %s', 'go' ), '<span>' . get_the_date( 'Y' ) . '</span>' );
					elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
						_e( 'Asides', 'go' );
					elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
						_e( 'Images', 'go');
					elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
						_e( 'Videos', 'go' );
					elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
						_e( 'Quotes', 'go' );
					elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
						_e( 'Links', 'go' );
					else :
						_e( 'Insights', 'go' );
				endif; ?>
        </h1>
        <?php if($header['excerpt']) { ?>
        <p><?php echo $header['excerpt']; ?></p>
        <?php }
		echo category_description();
		?>
    </div>
</header>
<?php } ?>
