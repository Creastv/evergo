<?php
$leftColumn   = get_field('left_column');
$rightColumn   = get_field('right_column');
?>
<section id="about-us-ex">
    <div class="about-us__wraper">
        <div class="about-us__col">
            <?php print $leftColumn; ?>
        </div>
        <div class="about-us__col">
            <?php echo $rightColumn; ?>
        </div>
    </div>
</section>
