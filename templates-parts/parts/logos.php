<?php
$logtypy = get_field('sogos');
$logos   = $logtypy['logo_cl']; 
?>
<section id="logos">
    <div class="logos__wraper text-center">
        <?php if($logtypy['title']) { ?>
        <div class="t-section__wraper">
            <h2 class="t-section-title h1"><?php echo $logtypy['title']; ?></h2>
        </div>
        <?php } ?>
    </div>
    <?php if($logos) { ?>
    <div class="testimonial__wraper">
        <div class="swiper logos">
            <div class="swiper-wrapper">
                <?php foreach($logos as $logo) { ?>
                <div class="swiper-slide">
                    <div class="logo">
                        <?php if($logo['link']) { ?>
                        <a href="<?php echo $logo['link']; ?>">
                            <?php } ?>
                            <?php echo wp_get_attachment_image( $logo['logo'], 'logo' ); ?>
                            <?php if($logo['link']) { ?>
                        </a>
                        <?php } ?>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <?php } ?>
</section>
