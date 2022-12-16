<?php
$people   = get_field('people'); 
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
</section>
