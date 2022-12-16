<?php
$header   = get_field('header');
$numbers  = get_field('numbers');
?>
<section id="case-study">
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
    <?php if($numbers) { ?>
    <div class="case-study__numbers">
        <?php foreach($numbers as $num) { ?>
        <div class="case-study__number">
            <span><b><?php echo $num['number']; ?></b></span>
            <p><?php echo $num['description']; ?></p>
        </div>
        <?php } ?>
    </div>
    <?php } ?>
</section>
