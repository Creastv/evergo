<?php
get_header();
 if ( have_posts() ) :
    while ( have_posts() ) : the_post();
    echo '<h1 class="title-page">';
    get_template_part( 'templates-parts/header/header', 'title' );
    echo "</h1>";
    get_template_part( 'templates-parts/content/content', 'index' );
    endwhile;
    else :
    echo "<h1 class='text-center'>Nic nie znaleziono</h1> ";
 endif;
get_footer();
