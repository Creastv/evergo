<?php
$slider    = get_field('slider'); 
?>

<section id="slider-hero">
    <div class="slider-hero__wraper">
        <div class="swiper slider-home">
            <div class="swiper-wrapper">
                <?php foreach ($slider as $slide ) { ?>
                <div class="swiper-slide">
                    <div class="slide <?php echo $slide['image'] ? 'c-white' : '' ?> ">
                        <div class="slider__content">
                            <h1 class="h1 h1-slider"><?php echo $slide['title']; ?></h1>
                            <?php if($slide['subtitle']) { ?>
                            <p><?php echo $slide['subtitle']; ?></p>
                            <?php } ?>
                        </div>
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
