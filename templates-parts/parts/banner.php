<?php
$left   = get_field('left');
$right   = get_field('right');
?>
<?php if($left  && $right) { ?>
<section id="banner">
    <div class="banner__wraper">
        <div class="left">
            <p class="h1"><?php echo $left; ?></p>
        </div>
        <div class="right">
            <p class="h2"> <?php echo $right['title']; ?></p>
            <p class="p"> <?php echo $right['description']; ?></p>
            <a href="<?php echo $right['link']['url']; ?>" target="<?php echo $right['link']['target'] ? $right['link']['target'] : '_self'; ?>" class="btn"><?php echo $right['link']['title']; ?></a>
        </div>
    </div>
</section>
<?php } ?>
