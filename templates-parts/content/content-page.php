<?php
$header = get_field('header');
?>
<article id="post-<?php the_ID(); ?>" class="hentry" <?php post_class(); ?>>
    <header class="t-page">
        <div class="t-page__content">
            <?php if($header['subtitle']) { ?>
            <span class="c-main"><?php echo $header['subtitle']; ?></span>
            <?php } ?>
            <h1 class="entry-title">
                <?php the_title(); ?>
            </h1>
            <?php if($header['excerpt']) { ?>
            <p><?php echo $header['excerpt']; ?></p>
            <?php } ?>
        </div>
        <div class="t-page__sroll">
            <span>Learn more</span>
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
    </header>
    <div class="entry-content">
        <?php the_content(); ?>
    </div>
    <footer class="entry-footer"></footer>
</article>
