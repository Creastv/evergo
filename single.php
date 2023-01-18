<?php
get_header();
while ( have_posts() ) : the_post();		
// test	
	get_template_part( 'templates-parts/content/content', 'single' );
endwhile;
get_footer();
