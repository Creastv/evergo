<?php
if(is_home()) {
$slug = get_page_by_path( 'blog' ); 
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
						_e( 'Blog', 'go' );
				endif; ?>
        </h1>
        <?php if($header['excerpt']) { ?>
        <p><?php echo $header['excerpt']; ?></p>
        <?php }
		echo category_description();
		?>
    </div>
    <div class="t-page__sroll js-scroll">
        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36">
            <g id="Group_1" data-name="Group 1" transform="translate(-1996 -461)">
                <g id="Ellipse_1" data-name="Ellipse 1" transform="translate(1996 461)" fill="none" stroke="#c6ced3" stroke-width="1">
                    <circle cx="18" cy="18" r="18" stroke="none" />
                    <circle cx="18" cy="18" r="17.5" fill="none" />
                </g>
                <g id="Rectangle_1" data-name="Rectangle 1" transform="translate(2009 469)" fill="none" stroke="#c6ced3" stroke-width="1">
                    <rect width="11" height="20" rx="5.5" stroke="none" />
                    <rect x="0.5" y="0.5" width="10" height="19" rx="5" fill="none" />
                </g>
                <line id="Shape_3" data-name="Shape 3" y2="5" transform="translate(2015 472)" fill="none" stroke="#c6ced3" stroke-width="1" />
            </g>
        </svg>
    </div>

</header>
<span class="scroll-anchor"></span>
<?php } ?>
