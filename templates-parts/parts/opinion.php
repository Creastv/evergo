<?php
$leftcolumn = get_field('left_column');
$opinion    = get_field('quick_opinion'); 
?>
<section id="opinion">
    <div class="opinion__wraper">
        <div class="opinion__wraper__col">
            <div class="t-section">
                <div class="t-section__wraper">
                    <?php if($leftcolumn['subtilte']) { ?>
                    <span class="c-main"><?php echo $leftcolumn['subtilte']; ?></span>
                    <?php } ?>
                    <?php if($leftcolumn['title']) { ?>
                    <p class="h3"><?php echo $leftcolumn['title']; ?></p>
                    <?php } ?>
                    <?php if($leftcolumn['description']) { ?>
                    <?php echo $leftcolumn['description']; ?>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="opinion__wraper__col">
            <div class="opinion__wraper__content">
                <div class="top">
                    <div class="img">
                        <?php echo wp_get_attachment_image(  $opinion['avatar'], 'person' ); ?>
                    </div>
                    <div class="name">
                        <p><b><?php echo $opinion['name'];?></b></p>
                        <span><?php echo $opinion['position']; ?></span>
                    </div>
                </div>
                <div class="bottom">
                    <p><?php echo $opinion['opinion']; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
