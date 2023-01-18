<?php
$cases   = get_field('case_study' );

?>
<section id="cases">
    <?php if( $cases ){ ?>
    <div class="cases__wraper">
        <?php foreach($cases as $case) {
            $img =  get_the_post_thumbnail( $case->ID, 'medium_large' ); 
            $permalink = get_permalink( $case->ID );
            $title = get_the_title( $case->ID );
            $excerpt = get_the_excerpt( $case->ID );
        ?>
        <article class="case__item">
            <div class="left">
                <?php echo $img; ?>
            </div>
            <div class="right">
                <h2><?php echo $title; ?></h2>
                <p><?php echo $excerpt; ?></p>
                <a href="<?php echo $permalink; ?>" class="btn"><?php _e( 'Read more', 'go' ); ?></a>
            </div>
        </article>
        <?php } ?>
    </div>
    <?php } ?>
</section>
