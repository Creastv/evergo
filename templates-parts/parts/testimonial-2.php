<?php
$people   = get_field('testimonial'); 
$header   = get_field('header_testimonial');
?>
<section id="testimonial-2">
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
    <?php if($people) { ?>
    <div class="testimonial-2__wraper">
        <div class="swiper testimonial-2">
            <div class="swiper-wrapper">
                <?php foreach ($people as $person ) { ?>
                <div class="swiper-slide">
                    <div class="testimonial-2__item">
                        <div class="testimonial-2__item__left">
                            <div class="img"><?php echo wp_get_attachment_image( $person['avatar'], 'person' ); ?></div>
                            <div class="name">
                                <p><b><?php echo $person['name']; ?></b></p>
                                <span><?php echo $person['position']; ?></span>
                            </div>
                        </div>
                        <svg class="apostrof" xmlns="http://www.w3.org/2000/svg" width="73" height="160" viewBox="0 0 73 160">
                            <text id="_" data-name="”" transform="translate(73 31) rotate(180)" fill="#37444a" font-size="145.153" font-family="TimesNewRomanPS-BoldMT, Times New Roman" font-weight="700" opacity="0.102">
                                <tspan x="0" y="0">”</tspan>
                            </text>
                        </svg>
                        <div class="testimonial-2__item__right">
                            <p><?php echo $person['opinion']; ?></p>
                        </div>
                    </div>
                    <div class="button">
                        <a href="<?php echo $person['link']['url']; ?>" target="<?php echo $person['link']['target'] ? $person['link']['target'] : '_self'; ?>" class="btn"><?php echo $person['link']['title']; ?></a>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="arrows">
            <div class="sw-pagination"></div>
        </div>
    </div>
    <?php } ?>
</section>
