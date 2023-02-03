<?php
$header   = get_field('header_articles');
  $posts = new WP_Query( array(
        'post_type' => 'post',
        'posts_per_page' => 3,
        'order' => 'DESC',
    ));

$chosenposts = get_field('select_posts');

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
                <?php if($chosenposts) { ?>
                <?php foreach( $chosenposts as $post ): 
                    setup_postdata($post); ?>
                <article class="post-item" id="post-<?php echo $post->ID; ?>">
                    <header>
                        <a href="<?php echo get_post_permalink($post->ID);?>"><?php echo get_the_post_thumbnail($post->ID,  'post'); ?></a>
                        <div class="meta-group">
                            <div class="meta meta-category">
                                <span><b><?php _e(' Cat: ', 'go' ); ?></b></span>
                                <?php $category_detail = get_the_category( $post->ID);
                                ?>
                                <ul class="post-categories">
                                    <?php foreach($category_detail as $cd){
                                   echo '<li>';
                                   echo '<a href="#">';
                                   echo $cd->cat_name;
                                   echo "</a>";
                                    echo ' </li>';
                              
                                }?>
                                </ul>
                            </div>
                            <div class="meta meta-pub">
                                <span><b><?php _e('Publication date: ', 'go' ); ?></b></span>
                                <time class="meta meta-data-pub published" datetime="<?php the_time() ?>"> <span><?php the_time('d.m.Y');?></span></time>
                            </div>
                        </div>
                    </header>
                    <hr>
                    <footer>
                        <h3 class=" title-page">
                            <a href="<?php echo get_post_permalink($post->ID); ?>"><?php echo get_the_title( $post->ID); ?></a>
                        </h3>
                        <a href="<?php echo get_post_permalink($post->ID); ?>" class="btn"><?php _e( 'Read more', 'go' ); ?></a>
                    </footer>
                </article>
                <?php endforeach; ?>

                <?php 
                // Reset the global post object so that the rest of the page works correctly.
                wp_reset_postdata(); ?>
                <?php } else { ?>
                <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
                <article class="post-item" id="post-<?php the_ID(); ?>">
                    <header>
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post'); ?></a>
                        <div class="meta-group">
                            <div class="meta meta-category">
                                <span><b><?php _e(' Cat: ', 'go' ); ?></b></span>
                                <?php the_category();?>
                            </div>
                            <div class="meta meta-pub">
                                <span><b><?php _e('Publication date: ', 'go' ); ?></b></span>
                                <time class="meta meta-data-pub published" datetime="<?php the_time() ?>"> <span><?php the_time('d.m.Y');?></span></time>
                            </div>
                        </div>
                    </header>
                    <hr>
                    <footer>
                        <h3 class=" title-page">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h3>
                        <a href="<?php the_permalink(); ?>" class="btn"><?php _e( 'Read more', 'go' ); ?></a>
                    </footer>
                </article>
                <?php endwhile; wp_reset_query(); ?>

                <?php }?>
            </div>
        </div>
    </div>
    <?php } ?>
</section>
