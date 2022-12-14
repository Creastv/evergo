<?php
$header   = get_field('header_op');
$people   = get_field('people'); 
$bg       = get_field('background');
?>
<section id="testimonial">
    <?php if($bg) { ?>
    <span class="testimonial__bg"></span>
    <?php } ?>
    <div class="t-section text-center">
        <div class="t-section__wraper">
            <?php if($header['subtitle']) { ?>
            <span class="c-main"><?php echo $header['subtitle']; ?></span>
            <?php } ?>
            <?php if($header['title']) { ?>
            <h2 class="t-section-title h1"><?php echo $header['title']; ?></h2>
            <?php } ?>
        </div>
    </div>
    <?php if($people) { ?>
    <div class="testimonial__wraper">
        <div class="swiper testimonial">
            <div class="swiper-wrapper">
                <?php foreach ($people as $person ) { ?>
                <div class="swiper-slide">
                    <div class="testimonial__item">
                        <div class="testimonial__item__top">
                            <div class="img"><?php echo wp_get_attachment_image( $person['img'], 'person' ); ?></div>
                            <div class="name">
                                <p><?php echo $person['name']; ?></p>
                                <span><?php echo $person['position']; ?></span>
                            </div>
                        </div>
                        <div class="testimonial__item__bottom">
                            <div class="stars">
                                <img src="<?php echo get_template_directory_uri() ?>'/src/img/stars-<?php echo $person['stars'];  ?>.png' ; ?>" />
                            </div>
                            <p><?php echo $person['opinion']; ?></p>
                            <span><b><?php echo $person['desc']; ?></b></span>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="arrows">
            <div class="sw-button-next">
                <svg xmlns="http://www.w3.org/2000/svg" width="20.703" height="10" viewBox="0 0 20.703 10">
                    <path id="Shape_15_copy" data-name="Shape 15 copy" d="M877,5050.8a5.983,5.983,0,0,1,.464-.593q1.962-1.961,3.938-3.91a.823.823,0,0,1,1.143-.113.8.8,0,0,1,.038,1.222c-.68.681-1.365,1.355-2.048,2.032-.242.241-.481.483-.754.759h.27q8.307,0,16.615-.007a.972.972,0,0,1,1.037.611v.4a.214.214,0,0,0-.037.045.821.821,0,0,1-.859.561q-8.368,0-16.736,0h-.291c.073.077.119.128.168.176.879.872,1.761,1.74,2.635,2.615a.8.8,0,0,1-.342,1.374.814.814,0,0,1-.825-.25q-1.165-1.16-2.336-2.315c-.54-.535-1.084-1.066-1.615-1.609a6.574,6.574,0,0,1-.464-.594Z" transform="translate(-877 -5045.999)" fill="#e1e1e1" />
                </svg>
            </div>
            <div class="sw-pagination"></div>
            <div class="sw-button-prev">
                <svg xmlns="http://www.w3.org/2000/svg" width="20.703" height="9.979" viewBox="0 0 20.703 9.979">
                    <path id="Shape_15" data-name="Shape 15" d="M1010,5051.191a5.929,5.929,0,0,1-.464.592q-1.962,1.957-3.937,3.9a.823.823,0,0,1-1.143.113.8.8,0,0,1-.038-1.219c.679-.679,1.365-1.352,2.048-2.028.242-.239.481-.482.755-.757h-.27q-8.308,0-16.614.007a.972.972,0,0,1-1.037-.609v-.4a.174.174,0,0,0,.036-.045.821.821,0,0,1,.859-.56q8.368.005,16.736,0h.291c-.074-.077-.119-.128-.168-.176-.879-.87-1.76-1.736-2.635-2.61a.8.8,0,0,1,.342-1.371.816.816,0,0,1,.825.25q1.165,1.159,2.336,2.311c.54.534,1.085,1.063,1.615,1.607a6.624,6.624,0,0,1,.464.592Z" transform="translate(-989.297 -5046)" fill="#e1e1e1" />
                </svg>
            </div>
        </div>
    </div>
    <?php } ?>
</section>
