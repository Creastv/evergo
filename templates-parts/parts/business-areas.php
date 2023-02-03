<?php
$header   = get_field('business_areas_header');
$areas    = get_field('areas'); 
?>
<section id="areas">
    <span class="areas__bg"></span>
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
    <?php  if($areas) { ?>
    <div class="areas__wraper">
        <?php foreach ($areas as $area ) { ?>
        <div class="areas__item">
            <div class="areas__item__wraper">
                <div class="icon">
                    <?php if( !$area['icon_swicher']){ ?>
                    <?php echo wp_get_attachment_image( $area['icon_img'], 'person' ); ?>
                    <?php } else { ?>
                    <?php echo $area['icon'] ?>
                    <?php } ?>
                </div>
                <h3><a href="<?php echo $area['link']['url']?>"> <?php echo $area['title'] ;?></a></h3>
                <p><?php echo $area['description'] ;?></p>
                <?php if($area['link']['url']) { ?>
                <a href="<?php echo $area['link']['url']?>" class="btn" target="<?php echo $area['link']['target'] ? $area['link']['target'] : '_self'?>"><?php echo $area['link']['title']; ?></a>
                <?php } ?>
            </div>
        </div>
        <?php } ?>
    </div>
    <?php } ?>
</section>
