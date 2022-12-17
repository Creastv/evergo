<?php
$slider    = get_field('quick_opinion'); 
?>

<section id="slider-hero">
    <div class="slider-hero__wraper">
        <div class="swiper slider-home">
            <div class="swiper-wrapper">
                <?php foreach ($slider as $slide ) { ?>
                <div class="swiper-slide">
                    <div class="slide">
                        <h1 class="h1 h1-slider">Make your digital<br>transformation a success</h1>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
