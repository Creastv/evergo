<?php
/**
*
* Template name: Service
* Template Post Type:  page
*/
get_header();
while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" class="hentry">
    <?php
	get_template_part( 'templates-parts/header/header', 'title' ); 
    
    get_template_part( 'templates-parts/parts/banner' );
	get_template_part( 'templates-parts/parts/services' );	
	get_template_part( 'templates-parts/parts/testimonial-2' );

	 ?>
    <div class="entry-content">
        <?php
		the_content();
		?>
    </div>
</article>
<?php endwhile;
get_footer();
