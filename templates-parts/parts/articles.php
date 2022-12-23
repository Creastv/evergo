<?php
$header   = get_field('header_articles', 'options');

  $posts = new WP_Query( array(
        'post_type' => 'post',
        'posts_per_page' => 3,
        'order' => 'DESC',
    ));
?>
<section id="articles">
    <div class="t-section text-center">
        <div class="t-section__wraper">
            <?php if($header['subtitle']) { ?>
            <span class="c-main"><?php echo $header['subtitle']; ?></span>
            <?php } ?>
            <?php if($header['title']) { ?>
            <h2 class="t-section-title h1"><?php echo $header['title']; ?></h2>
            <?php } ?>
            <?php if($header['description']) { ?>
            <p><?php echo $header['description']; ?></p>
            <?php } ?>
        </div>
    </div>
    <?php if($posts) { ?>
    <div class="container">
        <div class="row">
            <div class="posts-wraper posts-wraper--suggested">
                <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
                <article id="post-<?php the_ID(); ?>" class="post-item" <?php post_class(); ?>>
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
                        <h3 class=" title-page">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h3>
                        <a href="<?php the_permalink(); ?>" class="btn">Read more</a>
                    </footer>
                </article>
                <?php endwhile; wp_reset_query(); ?>
            </div>
        </div>
    </div>
    <?php } ?>
</section>
