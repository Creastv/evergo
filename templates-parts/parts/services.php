<?php
$cases   = get_field('case_study' );

?>
<section id="cases">
    <?php if( $cases ){ ?>
    <div class="cases__wraper">
        <?php foreach($cases as $case) {
            $permalink = $case['title'];
            $title = $case['excerpt'];
            $excerpt = $case['link'];
        ?>
        <article class="case__item">
            <div class="left">
                <?php echo wp_get_attachment_image( $case['image'], 'medium_large' ); ?>
            </div>
            <div class="right">
                <h2><?php echo $case['title']; ?></h2>
                <p><?php echo $case['excerpt']; ?></p>
                <a href="<?php echo $case['link']['url']; ?>" target="<?php echo $case['link']['target'] ? $case['link']['target'] : '_self'; ?>" class="btn"><?php echo $case['link']['title']; ?></a>
            </div>
        </article>
        <?php } ?>
    </div>
    <?php } ?>
</section>
