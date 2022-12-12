<article id="post-<?php the_ID(); ?>" class="hentry" <?php post_class(); ?>>
    <header class="title-page-wraper">
        <div class="container">
            <div class="row">
                <h1 class="entry-title title-page">
                   <?php the_title(); ?>
                </h1>
                <!-- <div class="meta-group">
                    <div class="meta meta-category">
                        <span><?php _e(' Kategoria: ', 'go' ); ?></span>
                        <?php the_category();?>
                    </div>
                    <div class="meta meta-pub">
                        <span><?php _e('Opublikowano: ', 'go' ); ?></span>
                        <time class="meta meta-data-pub published" datetime="<?php the_time('m-j-y g:i-A') ?>"> <span><?php the_time('d.m.Y');?></span></time>
                        <span><?php _e('przez:  ', 'go' ); ?></span>
                        <span class="vcard"> <?php the_author_posts_link(); ?></span>
                    </div> 
                </div> -->
            </div>
        </div>
    </header>
    
    <div class="entry-content">
        <?php the_content(); ?>
        
    </div>
    <footer class="entry-footer"></footer>
</article>