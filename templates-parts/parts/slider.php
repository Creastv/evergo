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
                    <div class="slide <?php echo $slide['image'] ? 'c-white' : '' ?> ">
                        <?php if($link ) { ?>
                        <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                            <?php } ?>
                            <div class="slider__content">

                                <h1 class="h1 h1-slider"><?php echo $slide['title']; ?></h1>
                                <?php if($slide['subtitle']) { ?>
                                <p><?php echo $slide['subtitle']; ?></p>
                                <?php } ?>

                            </div>
                            <?php if($slide['link']) { ?>
                        </a>
                        <?php } ?>
                        <?php if($slide['image']) { ?>
                        <div class="img" style="background-image: url(<?php echo $slide['image']; ?>)">
                            <div class="bg"></div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="pag-con">
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>
