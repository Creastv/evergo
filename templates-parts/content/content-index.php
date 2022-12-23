<article id="post-<?php the_ID(); ?>" <?php post_class('post-item'); ?>>
    <header>
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post'); ?></a>
        <div class="meta-group">
            <div class="meta meta-category">
                <span><b><?php _e(' Cat: ', 'go' ); ?></b></span>
                <?php the_category();?>
            </div>
            <div class="meta meta-pub">
                <span><b><?php _e('Publication date: ', 'go' ); ?></b></span>
                <time class="meta meta-data-pub published" datetime="<?php the_time('d.m.Y') ?>"> <span><?php the_time('d.m.Y');?></span></time>
            </div>
        </div>
    </header>
    <hr>
    <footer>
        <h2 class=" title-page">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>
        <a href="<?php the_permalink(); ?>" class="btn">Read more</a>
    </footer>
</article>
