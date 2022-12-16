<?php
$left   = get_field('left');
$right   = get_field('right');
?>
<section id="banner">
    <div class="banner__wraper">
        <div class="left">
            <p class="h1"><?php echo $left; ?></p>
        </div>
        <div class="right">
            <p class="h2"> <?php echo $right['title']; ?></p>
            <p class="p"> <?php echo $right['description']; ?></p>
            <a href="#" class="btn">Contact Us</a>
        </div>
    </div>
</section>
