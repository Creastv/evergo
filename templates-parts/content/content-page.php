<article id="post-<?php the_ID(); ?>" class="hentry" <?php post_class(); ?>>
    <header class="title-page-wraper">
        <h1 class="entry-title title-page">
            <?php the_title(); ?>
        </h1>
    </header>
    <div class="entry-content">
        <?php the_content(); ?>
    </div>
    <footer class="entry-footer"></footer>
</article>
