<article id="post-<?php the_ID(); ?>" class="single-post hentry">
    <header>
        <div class="t-page-wraper">
            <div class="t-page-title">
                <?php if(is_singular('post')) { ?>
                <span>Blog</span>
                <?php } else { ?>
                <span>Success Story</span>
                <?php } ?>
                <h1 class="entry-title">
                    <?php the_title(); ?>
                </h1>
                <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
            </div>
            <div class="t-page-sroll js-scroll">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36">
                    <g id="Group_1" data-name="Group 1" transform="translate(-1996 -461)">
                        <g id="Ellipse_1" data-name="Ellipse 1" transform="translate(1996 461)" fill="none" stroke="#c6ced3" stroke-width="1">
                            <circle cx="18" cy="18" r="18" stroke="none" />
                            <circle cx="18" cy="18" r="17.5" fill="none" />
                        </g>
                        <g id="Rectangle_1" data-name="Rectangle 1" transform="translate(2009 469)" fill="none" stroke="#c6ced3" stroke-width="1">
                            <rect width="11" height="20" rx="5.5" stroke="none" />
                            <rect x="0.5" y="0.5" width="10" height="19" rx="5" fill="none" />
                        </g>
                        <line id="Shape_3" data-name="Shape 3" y2="5" transform="translate(2015 472)" fill="none" stroke="#c6ced3" stroke-width="1" />
                    </g>
                </svg>
            </div>
        </div>
        <div class="img-wraper">
            <div class="img">
                <?php the_post_thumbnail(); ?>
            </div>
            <div class="img-blur">
                <?php the_post_thumbnail('thumbnail'); ?>
            </div>
        </div>
        <span class="scroll-anchor"></span>
    </header>
    <div class="entry-content">
        <?php if(is_singular('post')) { ?>
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
        <hr class="hr">
        <?php } ?>
        <?php the_content(); ?>
        <?php if(is_singular('post')) { ?>
        <div id="author-bio">
            <div id="author-avatar"><?php echo get_avatar( get_the_author_meta( 'ID' ), 60 ); ?></div>

            <div id="author-details">
                <div class="author-head">
                    <div class="title">
                        <p class="h3"><?php the_author_posts_link(); ?></p>
                        <i><?php $author_id = get_the_author_meta('ID'); the_field('pozycja', 'user_'. $author_id); ?></i>
                    </div>
                    <div class="links">
                        <?php  if (get_the_author_meta('user_url') ) { ?>
                        <a href="<?php the_author_meta('user_url'); ?>" class="author-website" target="_blank">
                            <i class="fas fa-link"></i>
                        </a>
                        <?php } ?>
                        <?php  if (get_the_author_meta('linkedin') ) { ?>
                        <a href="<?php the_author_meta('linkedin'); ?>" class="author-linkedin" target="_blank">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <?php } ?>
                        <?php  if (get_the_author_meta('facebook') ) { ?>
                        <a href="<?php the_author_meta('facebook'); ?>" class="author-facebook" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <?php } ?>
                        <?php  if (get_the_author_meta('twitter') ) { ?>
                        <a href="<?php the_author_meta('twitter'); ?>" class="author-twitter" target="_blank">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <?php }?>
                        <?php  if (get_the_author_meta('instagram') ) { ?>
                        <a href="<?php the_author_meta('instagram'); ?>" class="author-instagram" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <?php } ?>
                    </div>
                </div>
                <div class="author-footer">
                    <p> <?php the_author_description(); ?></p>
                </div>
            </div><!-- #author-details -->
        </div><!-- #author-bio -->
        <?php } ?>
    </div>
    <?php if(is_singular('case-study')){ ?>
    <?php get_template_part( 'templates-parts/parts/actions-effects' ); ?>
    <?php } ?>
</article>
