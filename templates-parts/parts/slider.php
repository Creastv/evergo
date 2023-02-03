<?php
$slider    = get_field('slider'); 
?>

<section id="slider-hero">
    <div class="slider-hero__wraper">
        <div class="swiper slider-home">
            <div class="swiper-wrapper">
                <?php foreach ($slider as $slide ) { ?>
                <?php 
                    $link = $slide['link'];
                    if( $link ){ 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                    }
                ?>
                <div class="swiper-slide">
                    <div class="slide">
                        <?php if($link ) { ?>
                        <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                            <?php } ?>
                            <div class="slider__content_wraper">
                                <?php if($slide['image']) { ?>
                                <div class="slider__content">
                                    <?php } ?>

                                    <h1 class="h1 h1-slider"><?php echo $slide['title']; ?></h1>
                                    <?php if($slide['subtitle']) { ?>
                                    <p><?php echo $slide['subtitle']; ?></p>
                                    <?php } ?>

                                </div>
                                <?php if($slide['image']) { ?>
                                <div class="img">
                                    <?php if($slide['image'] ) { echo wp_get_attachment_image($slide['image'], 'slider' ); } ?>
                                </div>

                            </div>
                            <?php } ?>
                            <?php if($slide['link']) { ?>
                        </a>
                        <?php } ?>

                    </div>
                </div>
                <?php } ?>
            </div>
        </div>

    </div>
    <div class="pag-con">
        <div class="swiper-pagination"></div>
    </div>
</section>
