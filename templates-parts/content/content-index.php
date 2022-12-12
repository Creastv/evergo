<article id="post-<?php the_ID(); ?>" class="hentry" <?php post_class(); ?>>
    <h2 class="entry-title">
         <?php get_template_part('templates-parts/header/header', 'title'); ?>
    </h2>
    <div class="meta-group">
        <div class="meta meta-category">
            <span><?php _e(' Kategoria: ', 'go' ); ?></span>
            <?php the_category();?>
        </div>
        <time class="meta meta-data-pub published" datetime="<?php the_time('m-j-y g:i-A') ?>">
            <span><?php the_time('d.m.Y');?></span>
        </time>
        <div class="meta">
            <div class="vcard">
              <?php the_author_posts_link(); ?>
            </div>
        </div>
    </div>
    <div class="entry-content">
        <?php the_content(); ?>
    </div>
    <footer class="entry-footer"></footer>
</article>