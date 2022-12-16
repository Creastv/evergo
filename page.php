<?php
get_header();
while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" class="hentry" <?php post_class(); ?>>
    <?php
	get_template_part( 'templates-parts/header/header', 'title' ); 
	
	if(is_page(10)){ //Home
		get_template_part( 'templates-parts/parts/slider' );
		get_template_part( 'templates-parts/parts/logos' );
		get_template_part( 'templates-parts/parts/opinion' );
		get_template_part( 'templates-parts/parts/business-areas' );
		get_template_part( 'templates-parts/parts/about-us' );
		get_template_part('templates-parts/parts/footer', 'form');
		get_template_part( 'templates-parts/parts/numbers' );
		get_template_part( 'templates-parts/parts/testimonial' );
	 } else if (is_page(17)){ // About us
		get_template_part( 'templates-parts/parts/about-us-ext' );
		get_template_part( 'templates-parts/parts/numbers' );
		get_template_part( 'templates-parts/parts/business-areas' );
		get_template_part( 'templates-parts/parts/testimonial' );
	 } else if (is_page(21)){ //Case study
		get_template_part( 'templates-parts/parts/case-study' );
		get_template_part( 'templates-parts/parts/banner' );
		get_template_part( 'templates-parts/parts/testimonial-2' );
	 }
	 ?>
    <div class="entry-content">
        <?php
		the_content();
		?>
    </div>
    <footer class="entry-footer"></footer>
</article>
<?php endwhile;
get_footer();
