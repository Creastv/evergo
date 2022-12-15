<?php
$leftColumn   = get_field('left_col');
$banner       = get_field('banner_as'); 
?>
<section id="about-us">
    <div class="about-us__wraper">
        <div class="about-us__col">
            <?php print $leftColumn; ?>
        </div>
        <div class="about-us__col">
            <div class="about-us__cover" style="background-image: url(<?php echo $banner['image']; ?>)">
                <div class="about-us__cover__bg">
                    <div class="about-us__cover__content">
                        <div>
                            <p class="h2"><?php echo $banner['title']; ?></p>
                            <p><i><?php echo $banner['says']; ?></i></p>
                        </div>
                        <a href="<?php echo $banner['link']['url']; ?>#" class="btn" target="<?php echo $banner['link']['target'] ? $banner['link']['target'] : '_self'; ?>"><?php echo $banner['link']['title']; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
